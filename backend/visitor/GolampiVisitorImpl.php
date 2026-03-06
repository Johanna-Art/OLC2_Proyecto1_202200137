<?php
require_once __DIR__ . '/../src/TablaSimbolos.php';
require_once __DIR__ . '/../src/ManejadorErrores.php';
require_once __DIR__ . '/../antlr/GolampiVisitor.php';
require_once __DIR__ . '/../antlr/GolampiBaseVisitor.php';

class GolampiVisitorImpl extends GolampiBaseVisitor {
    
    private $tablaSimbolos;
    private $manejadorErrores;
    private $salida = '';
    
    public function __construct($tablaSimbolos, $manejadorErrores) {
        $this->tablaSimbolos = $tablaSimbolos;
        $this->manejadorErrores = $manejadorErrores;
    }
    
    // programa
    public function visitReglaPrograma($ctx) {
        if ($ctx && method_exists($ctx, 'declaracion')) {
            foreach ($ctx->declaracion() as $d) {
                $this->visit($d);
            }
        }
        return $this->salida;
    }
    
    // función
    public function visitReglaDeclFunc($ctx) {
        if (!$ctx || !method_exists($ctx, 'ID')) return null;
        $id = $ctx->ID();
        if (!$id || $id->getText() !== 'main') return null;
        
        $this->tablaSimbolos->entrarAmbito('main');   // Entrar ámbito a la funcion
        
        if (method_exists($ctx, 'bloque')) {         // Visitar el bloque de la función
            $bloque = $ctx->bloque();
            if ($bloque) {
                $this->visit($bloque);
            }
        }
        
        $this->tablaSimbolos->salirAmbito();
        return null;
    }
    
 
    public function visitReglaBloqueStmt($ctx) { //bloque
        if (!$ctx) return null;
        $linea = 0;
        if (method_exists($ctx, 'getStart')) {
            $start = $ctx->getStart();
            if ($start && method_exists($start, 'getLine')) {
                $linea = $start->getLine();
            }
        }
        $this->tablaSimbolos->entrarAmbito('bloque_'.$linea);
        
        // Visitar todas las sentencias del bloque
        if (method_exists($ctx, 'sentencia')) {
            foreach ($ctx->sentencia() as $s) {
                $this->visit($s);
            }
        }
        
        $this->tablaSimbolos->salirAmbito();
        return null;
    }
    
    // Declaración corta
    public function visitReglaSentVarCorta($ctx) {
        if (!$ctx || !method_exists($ctx, 'listaId')) return null;
        $listaId = $ctx->listaId();
        if (!$listaId || !method_exists($listaId, 'ID')) return null;
        
        $ids = $listaId->ID();
        
        // Evalua todas las expresiones
        $valores = [];
        if (method_exists($ctx, 'listaExpr') && $ctx->listaExpr()) {
            foreach ($ctx->listaExpr()->expresion() as $e) {
                $valores[] = $this->eval($e);
            }
        }
        
        // Luego declara las variables con sus valores
        for ($i = 0; $i < count($ids); $i++) {
            $id = $ids[$i];
            if (!$id) continue;
            
            $nombre = $id->getText();
            $valor = isset($valores[$i]) ? $valores[$i] : null;
            $tipo = $this->tipoDe($valor);
            
            //Agregar al ambito actual
            $this->tablaSimbolos->agregarSimbolo(
                $nombre,
                $tipo,
                0,
                0,
                $valor,
                false,
                'variable'
            );
        }
        return null;
    }
    
    public function visitReglaSentVar($ctx) {
        if (!$ctx || !method_exists($ctx, 'listaId')) return null;
        $listaId = $ctx->listaId();
        if (!$listaId || !method_exists($listaId, 'ID')) return null;
        
        $tipo = 'int32';
        if (method_exists($ctx, 'tipo') && $ctx->tipo()) {
            $t = $ctx->tipo();
            if (method_exists($t, 'INT32') && $t->INT32()) $tipo = 'int32';
            elseif (method_exists($t, 'FLOAT32') && $t->FLOAT32()) $tipo = 'float32';
            elseif (method_exists($t, 'BOOL') && $t->BOOL()) $tipo = 'bool';
            elseif (method_exists($t, 'STRING_TYPE') && $t->STRING_TYPE()) $tipo = 'string';
        }
        
        $ids = $listaId->ID();
        
        $valores = [];
        if (method_exists($ctx, 'listaExpr') && $ctx->listaExpr()) {
            foreach ($ctx->listaExpr()->expresion() as $e) {
                $valores[] = $this->eval($e);
            }
        }
        
        for ($i = 0; $i < count($ids); $i++) {
            $id = $ids[$i];
            if (!$id) continue;
            
            $nombre = $id->getText();
            $valor = isset($valores[$i]) ? $valores[$i] : $this->valorPorDefecto($tipo);
            
            $this->tablaSimbolos->agregarSimbolo(
                $nombre,
                $tipo,
                0,
                0,
                $valor,
                false,
                'variable'
            );
        }
        return null;
    }
    
    // ========== EXPRESIÓN ==========
    public function visitReglaSentExpr($ctx) {
        if (!$ctx || !method_exists($ctx, 'listaExpr')) return null;
        if (!$ctx->listaExpr()) return null;
        foreach ($ctx->listaExpr()->expresion() as $e) {
            $this->eval($e);
        }
        return null;
    }
    
    // ========== PRINTLN ==========
    public function visitReglaPrimarioPrintln($ctx) {
        if (!$ctx || !method_exists($ctx, 'argumentos')) return null;
        $argsCtx = $ctx->argumentos();
        if (!$argsCtx || !method_exists($argsCtx, 'listaExpr')) return null;
        if (!$argsCtx->listaExpr()) return null;
        
        $args = [];
        foreach ($argsCtx->listaExpr()->expresion() as $a) {
            $v = $this->eval($a);
            if (is_bool($v)) {
                $args[] = $v ? 'true' : 'false';
            } elseif ($v === null) {
                $args[] = 'nil';
            } else {
                $args[] = $v;
            }
        }
        
        $this->salida .= implode(' ', $args) . "\n";
        return null;
    }
    
    // EVAL 
 
    private function eval($ctx) {
        if (!$ctx || !is_object($ctx)) {
            return null;
        }
        
        $clase = get_class($ctx);
        
        // 1. ReglaExprPrimario
        if (strpos($clase, 'ReglaExprPrimario') !== false) {
            if (method_exists($ctx, 'primario') && $ctx->primario()) {
                return $this->evalPrimario($ctx->primario());
            }
            return null;
        }
        
        // 2. Primario directo
        if (strpos($clase, 'Primario') !== false && strpos($clase, 'Expr') === false) {
            return $this->evalPrimario($ctx);
        }
        
        //  3. Operaciones binarias
        if (strpos($clase, 'ReglaExprSuma') !== false) {
            if (!method_exists($ctx, 'expresion')) return null;
            $a = $this->eval($ctx->expresion(0));
            $b = $this->eval($ctx->expresion(1));
           
            if ($a === null || $b === null) return null;
            if (is_string($a) || is_string($b)) return $a . $b;
            if (is_numeric($a) && is_numeric($b)) return $a + $b;
            return null;
        }
        
        if (strpos($clase, 'ReglaExprResta') !== false) {
            if (!method_exists($ctx, 'expresion')) return null;
            $a = $this->eval($ctx->expresion(0));
            $b = $this->eval($ctx->expresion(1));
            if ($a === null || $b === null) return null;
            return $a - $b;
        }
        
        if (strpos($clase, 'ReglaExprMult') !== false) {
            if (!method_exists($ctx, 'expresion')) return null;
            $a = $this->eval($ctx->expresion(0));
            $b = $this->eval($ctx->expresion(1));
            if ($a === null || $b === null) return null;
            return $a * $b;
        }
        
        if (strpos($clase, 'ReglaExprDiv') !== false) {
            if (!method_exists($ctx, 'expresion')) return null;
            $a = $this->eval($ctx->expresion(0));
            $b = $this->eval($ctx->expresion(1));
            if ($a === null || $b === null) return null;
            return $b != 0 ? $a / $b : 0;
        }
        
        //  4. Comparaciones
        if (strpos($clase, 'ReglaExprMayor') !== false) {
            if (!method_exists($ctx, 'expresion')) return null;
            $a = $this->eval($ctx->expresion(0));
            $b = $this->eval($ctx->expresion(1));
            if ($a === null || $b === null) return null;
            return $a > $b;
        }
        
        if (strpos($clase, 'ReglaExprMenor') !== false) {
            if (!method_exists($ctx, 'expresion')) return null;
            $a = $this->eval($ctx->expresion(0));
            $b = $this->eval($ctx->expresion(1));
            if ($a === null || $b === null) return null;
            return $a < $b;
        }
        
        if (strpos($clase, 'ReglaExprIgualdad') !== false) {
            if (!method_exists($ctx, 'expresion')) return null;
            $a = $this->eval($ctx->expresion(0));
            $b = $this->eval($ctx->expresion(1));
            if ($a === null || $b === null) return null;
            return $a == $b;
        }
        
        if (strpos($clase, 'ReglaExprDesigualdad') !== false) {
            if (!method_exists($ctx, 'expresion')) return null;
            $a = $this->eval($ctx->expresion(0));
            $b = $this->eval($ctx->expresion(1));
            if ($a === null || $b === null) return null;
            return $a != $b;
        }
        
        //  5. Unarios
        if (strpos($clase, 'ReglaExprNot') !== false) {
            if (!method_exists($ctx, 'expresion')) return null;
            return !$this->eval($ctx->expresion(0));
        }
        
        if (strpos($clase, 'ReglaExprMenosUnario') !== false) {
            if (!method_exists($ctx, 'expresion')) return null;
            $v = $this->eval($ctx->expresion(0));
            return is_numeric($v) ? -$v : null;
        }
        
        //  6. Literal directo
        if (method_exists($ctx, 'literal') && $ctx->literal()) {
            return $this->evalLiteral($ctx->literal());
        }
        
        //  7. ID directo
        if (method_exists($ctx, 'ID') && $ctx->ID()) {
            $nombre = $ctx->ID()->getText();
            $simbolo = $this->tablaSimbolos->buscarSimbolo($nombre);
          
            if ($simbolo === null) {
               
            }
            return $simbolo ? $simbolo['valor'] : null;
        }
        
        return null;
    }
    

    // EVAL PRIMARIO
    private function evalPrimario($ctx) {
        if (!$ctx || !is_object($ctx)) return null;
        
        $clase = get_class($ctx);
        
        // Built-ins
        if (strpos($clase, 'Println') !== false) {
            return $this->visitReglaPrimarioPrintln($ctx);
        }
        if (strpos($clase, 'Len') !== false) {
            if (method_exists($ctx, 'expresion') && $ctx->expresion()) {
                $v = $this->eval($ctx->expresion());
                if (is_string($v)) return strlen($v);
                if (is_array($v)) return count($v);
            }
            return 0;
        }
        if (strpos($clase, 'Now') !== false) {
            return date('Y-m-d H:i:s');
        }
        if (strpos($clase, 'TypeOf') !== false) {
            if (method_exists($ctx, 'expresion') && $ctx->expresion()) {
                return $this->tipoDe($this->eval($ctx->expresion()));
            }
            return 'nil';
        }
        
        // Literal
        if (method_exists($ctx, 'literal')) {
            $lit = $ctx->literal();
            if ($lit && is_object($lit)) {
                return $this->evalLiteral($lit);
            }
        }
        
        // ID se busca el ambito
        if (method_exists($ctx, 'ID') && $ctx->ID()) {
            $nombre = $ctx->ID()->getText();
            $simbolo = $this->tablaSimbolos->buscarSimbolo($nombre);
            return $simbolo ? $simbolo['valor'] : null;
        }
        
        return null;
    }
    
    // EVAL LITERAL
    private function evalLiteral($ctx) {
        if (!$ctx || !is_object($ctx)) return null;
        
        if (method_exists($ctx, 'ENTERO_LITERAL') && $ctx->ENTERO_LITERAL()) {
            return (int)$ctx->ENTERO_LITERAL()->getText();
        }
        if (method_exists($ctx, 'FLOTANTE_LITERAL') && $ctx->FLOTANTE_LITERAL()) {
            return (float)$ctx->FLOTANTE_LITERAL()->getText();
        }
        if (method_exists($ctx, 'CADENA_LITERAL') && $ctx->CADENA_LITERAL()) {
            $t = $ctx->CADENA_LITERAL()->getText();
            return substr($t, 1, -1);
        }
        if (method_exists($ctx, 'RUNA_LITERAL') && $ctx->RUNA_LITERAL()) {
            $t = $ctx->RUNA_LITERAL()->getText();
            return $t[1] ?? '';
        }
        if (method_exists($ctx, 'TRUE') && $ctx->TRUE()) {
            return true;
        }
        if (method_exists($ctx, 'FALSE') && $ctx->FALSE()) {
            return false;
        }
        
        return null;
    }
    
    // UTILIDADES
    private function tipoDe($valor) {
        if (is_int($valor)) return 'int32';
        if (is_float($valor)) return 'float32';
        if (is_bool($valor)) return 'bool';
        if (is_string($valor)) return 'string';
        if (is_array($valor)) return 'array';
        return 'nil';
    }
    
    private function valorPorDefecto($tipo) {
        return match($tipo) {
            'int32', 'rune' => 0,
            'float32' => 0.0,
            'bool' => false,
            'string' => '',
            default => null
        };
    }
    
    public function obtenerSalida() {
        return $this->salida;
    }

    public function visitReglaSentConst($ctx) {
    if (!$ctx || !method_exists($ctx, 'ID')) return null;
    
    $idNode = $ctx->ID();
    if (!$idNode) return null;
    
    $nombre = $idNode->getText();
    
    // Se obtiene tipo
    $tipo = 'string';
    if (method_exists($ctx, 'tipo') && $ctx->tipo()) {
        $t = $ctx->tipo();
        if (method_exists($t, 'INT32') && $t->INT32()) $tipo = 'int32';
        elseif (method_exists($t, 'FLOAT32') && $t->FLOAT32()) $tipo = 'float32';
        elseif (method_exists($t, 'BOOL') && $t->BOOL()) $tipo = 'bool';
        elseif (method_exists($t, 'STRING_TYPE') && $t->STRING_TYPE()) $tipo = 'string';
        elseif (method_exists($t, 'RUNE') && $t->RUNE()) $tipo = 'rune';
    }
    
    // Evaluar valor de la expresion
    $valor = null;
    if (method_exists($ctx, 'expresion') && $ctx->expresion()) {
        $valor = $this->eval($ctx->expresion());
    }
    
    // Agregar como CONSTANTE 
    $this->tablaSimbolos->agregarSimbolo(
        $nombre,
        $tipo,
        0,
        0,
        $valor,
        true,  
        'constante'
    );
    
    return null;
}
}
?>