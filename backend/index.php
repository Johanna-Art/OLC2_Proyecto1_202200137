<?php
/**
 * Golampi Backend - Punto de entrada principal
 * Soporta: ejecución, reportes de errores, tabla de símbolos y AST
 */

error_reporting(0);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

while (@ob_get_level()) { @ob_end_clean(); }

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

$respuesta = [
    'exito' => false,
    'error' => 'Error interno',
    'salida' => '',
    'errores' => [],
    'tablaSimbolos' => [],
    'ast' => [],
    'reportes' => []
];

try {
    if (!file_exists(__DIR__ . '/../vendor/autoload.php')) {
        throw new Exception('vendor/autoload.php no encontrado');
    }
    require_once __DIR__ . '/../vendor/autoload.php';
    
    // Cargar clases propias
    require_once __DIR__ . '/src/TablaSimbolos.php';
    require_once __DIR__ . '/src/ManejadorErrores.php';
    require_once __DIR__ . '/src/GeneradorReportes.php';
    require_once __DIR__ . '/visitor/GolampiVisitorImpl.php';
    require_once __DIR__ . '/antlr/GolampiLexer.php';
    require_once __DIR__ . '/antlr/GolampiParser.php';
    
    // Recibir datos
    $input = json_decode(file_get_contents('php://input'), true);
    $codigo = $input['codigo'] ?? '';
    $accion = $input['accion'] ?? 'ejecutar';
    
    // Inicializar componentes
    $tablaSimbolos = new TablaSimbolos();
    $manejadorErrores = new ManejadorErrores();
    $generadorReportes = new GeneradorReportes();
    
    // Análisis léxico y sintáctico
    $inputStream = \Antlr\Antlr4\Runtime\InputStream::fromString($codigo);
    $lexer = new GolampiLexer($inputStream);
    $tokens = new \Antlr\Antlr4\Runtime\CommonTokenStream($lexer);
    $parser = new GolampiParser($tokens);
    $parser->removeErrorListeners();
    
    $arbol = $parser->programa();
    
    // Generar AST (estructura del árbol)
    $ast = [];
    if ($arbol) {
        $ast = $generadorReportes->generarAST($arbol, 0);
    }
    
    // Ejecutar solo si no hay errores sintácticos y la acción es ejecutar
    $salida = '';
    if ($parser->getNumberOfSyntaxErrors() === 0 && $accion === 'ejecutar') {
        $visitor = new GolampiVisitorImpl($tablaSimbolos, $manejadorErrores);
        $salida = $visitor->visitReglaPrograma($arbol);
    }
    
    // Preparar respuesta
    $respuesta = [
        'exito' => true,
        'salida' => $salida,
        'errores' => $manejadorErrores->obtenerErrores(),
        'tablaSimbolos' => $tablaSimbolos->obtenerTablaCompleta(),
        'ast' => $ast,
        'reportes' => [
            'erroresCSV' => base64_encode($generadorReportes->generarCSVErrores($manejadorErrores->obtenerErrores())),
            'simbolosCSV' => base64_encode($generadorReportes->generarCSVSimbolos($tablaSimbolos->obtenerTablaCompleta())),
            'astJSON' => base64_encode(json_encode($ast, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)),
            'resultadoTXT' => base64_encode($salida)
        ]
    ];
    
} catch (Throwable $e) {
   $respuesta = [
    'exito' => true,
    'salida' => $salida,
    'errores' => $manejadorErrores->obtenerErrores(),
    'tablaSimbolos' => $tablaSimbolos->obtenerTablaCompleta(),
    'ast' => $ast,  // AST como array
    'reportes' => [
        'erroresCSV' => base64_encode($generadorReportes->generarCSVErrores($manejadorErrores->obtenerErrores())),
        'simbolosCSV' => base64_encode($generadorReportes->generarCSVSimbolos($tablaSimbolos->obtenerTablaCompleta())),
        'astJSON' => base64_encode(json_encode($ast, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)),
        'resultadoTXT' => base64_encode($salida)
    ]
];
}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
exit;
?>