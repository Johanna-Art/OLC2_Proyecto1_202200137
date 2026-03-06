<?php
// Configuración crítica
while (@ob_get_level()) { @ob_end_clean(); }
error_reporting(0);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

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
    'reportes' => []
];

try {
    // Verificar autoload de Composer
    if (!file_exists(__DIR__ . '/../vendor/autoload.php')) {
        throw new Exception('vendor/autoload.php no encontrado. Ejecuta: composer install');
    }
    require_once __DIR__ . '/../vendor/autoload.php';
    
    // Clases propias - RUTA: backend/src/
    require_once __DIR__ . '/src/TablaSimbolos.php';
    require_once __DIR__ . '/src/ManejadorErrores.php';
    require_once __DIR__ . '/src/GeneradorReportes.php';
    
    require_once __DIR__ . '/visitor/GolampiVisitorImpl.php';
    
  
    require_once __DIR__ . '/antlr/GolampiLexer.php';
    require_once __DIR__ . '/antlr/GolampiParser.php';
    

    $input = json_decode(file_get_contents('php://input'), true);
    $codigo = $input['codigo'] ?? '';

    
    // inicializa los componentes
    $tablaSimbolos = new TablaSimbolos();
    $manejadorErrores = new ManejadorErrores();
    $generadorReportes = new GeneradorReportes();
    

    // analisis con antlr
    $inputStream = \Antlr\Antlr4\Runtime\InputStream::fromString($codigo);
    $lexer = new GolampiLexer($inputStream);
    $tokens = new \Antlr\Antlr4\Runtime\CommonTokenStream($lexer);
    $parser = new GolampiParser($tokens);
    
    $parser->removeErrorListeners();
    $arbol = $parser->programa();
    
    
    // Se ejecuta el visitor
    $salida = '';
    if ($parser->getNumberOfSyntaxErrors() === 0) {
        $visitor = new GolampiVisitorImpl($tablaSimbolos, $manejadorErrores);
        $salida = $visitor->visit($arbol);
    }
    


    $respuesta = [
        'exito' => true,
        'salida' => $salida,
        'errores' => $manejadorErrores->obtenerErrores(),
        'tablaSimbolos' => $tablaSimbolos->obtenerTablaCompleta(),
        'reportes' => [
            'erroresCSV' => base64_encode($generadorReportes->generarCSVErrores($manejadorErrores->obtenerErrores())),
            'simbolosCSV' => base64_encode($generadorReportes->generarCSVSimbolos($tablaSimbolos->obtenerTablaCompleta()))
        ]
    ];
    
} catch (Throwable $e) {
    $respuesta = [
        'exito' => false,
        'error' => $e->getMessage(),
        'salida' => '',
        'errores' => [],
        'tablaSimbolos' => []
    ];
}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
exit;
?>