cat > backend/index.php << 'EOF'
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Cargar autoloader de Composer
require_once __DIR__ . '/../vendor/autoload.php';

// Cargar clases propias
require_once __DIR__ . '/src/SymbolTable.php';
require_once __DIR__ . '/src/ErrorHandler.php';
require_once __DIR__ . '/src/SemanticAnalyzer.php';

// Cargar parser generado por ANTLR
require_once __DIR__ . '/antlr/GolampiLexer.php';
require_once __DIR__ . '/antlr/GolampiParser.php';

use Antlr\Antlr4PhpRuntime\CharStreams;
use Antlr\Antlr4PhpRuntime\CommonTokenStream;

$input = json_decode(file_get_contents('php://input'), true);
$code = $input['code'] ?? '';
$action = $input['action'] ?? 'execute';

$symbolTable = new SymbolTable();
$errorHandler = new ErrorHandler();

try {
    // 1. Análisis léxico y sintáctico con ANTLR
    $inputStream = CharStreams::fromString($code);
    $lexer = new GolampiLexer($inputStream);
    $tokens = new CommonTokenStream($lexer);
    $parser = new GolampiParser($tokens);
    
    // Eliminar error listeners por defecto para manejar errores manualmente
    $parser->removeErrorListeners();
    
    // 2. Obtener árbol sintáctico
    $tree = $parser->programa();
    
    // 3. Análisis semántico (
    $analyzer = new SemanticAnalyzer($symbolTable, $errorHandler);
    $analyzer->analyze($tree);
    
    // 4. Ejecución 
    $output = " Código procesado correctamente\n";
    
    $response = [
        'success' => true,
        'output' => $output,
        'errors' => $errorHandler->getErrors(),
        'symbols' => $symbolTable->getTable()
    ];
    
} catch (Exception $e) {
    $errorHandler->addError('Ejecución', $e->getMessage(), 0, 0);
    $response = [
        'success' => false,
        'output' => '',
        'errors' => $errorHandler->getErrors()
    ];
}

echo json_encode($response);
?>
EOF