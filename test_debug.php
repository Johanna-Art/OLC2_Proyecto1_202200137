<?php
require_once 'vendor/autoload.php';
require_once 'backend/antlr/GolampiLexer.php';
require_once 'backend/antlr/GolampiParser.php';

use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\CommonTokenStream;

echo "=== PRUEBAS DE PARSER (con punto y coma) ===\n\n";

// Prueba 1: main vacío
$codigo1 = 'func main() {}';
$s = InputStream::fromString($codigo1);
$l = new GolampiLexer($s);
$t = new CommonTokenStream($l);
$p = new GolampiParser($t);
$p->removeErrorListeners();
$p->programa();
echo "1. main vacío: " . $p->getNumberOfSyntaxErrors() . " errores\n";


$codigo2 = 'func main() { var x int32 = 10; }';
$s = InputStream::fromString($codigo2);
$l = new GolampiLexer($s);
$t = new CommonTokenStream($l);
$p = new GolampiParser($t);
$p->removeErrorListeners();
$p->programa();
echo "2. var x int32 = 10; : " . $p->getNumberOfSyntaxErrors() . " errores\n";


$codigo3 = 'func main() { a := 10; }';
$s = InputStream::fromString($codigo3);
$l = new GolampiLexer($s);
$t = new CommonTokenStream($l);
$p = new GolampiParser($t);
$p->removeErrorListeners();
$p->programa();
echo "3. a := 10; : " . $p->getNumberOfSyntaxErrors() . " errores\n";


$codigo4 = 'func main() { fmt.Println("Hola"); }';
$s = InputStream::fromString($codigo4);
$l = new GolampiLexer($s);
$t = new CommonTokenStream($l);
$p = new GolampiParser($t);
$p->removeErrorListeners();
$p->programa();
echo "4. fmt.Println(\"Hola\"); : " . $p->getNumberOfSyntaxErrors() . " errores\n";

echo "\n";

if ($p->getNumberOfSyntaxErrors() === 0) {
    echo "¡TODAS LAS PRUEBAS PASARON!\n";
    
    // Probar visitor
    require_once 'backend/src/TablaSimbolos.php';
    require_once 'backend/src/ManejadorErrores.php';
    require_once 'backend/visitor/GolampiVisitorImpl.php';
    
    $s = InputStream::fromString($codigo4);
    $l = new GolampiLexer($s);
    $t = new CommonTokenStream($l);
    $p = new GolampiParser($t);
    $p->removeErrorListeners();
    $arbol = $p->programa();
    
    $tabla = new TablaSimbolos();
    $errores = new ManejadorErrores();
    $visitor = new GolampiVisitorImpl($tabla, $errores);
    $salida = $visitor->visitPrograma($arbol);
    
    echo "\n=== SALIDA DEL VISITOR ===\n";
    echo $salida ?: "(vacía)\n";
    echo "==========================\n";
} else {
    echo " Aún hay errores - revisa la gramática\n";
}
?>