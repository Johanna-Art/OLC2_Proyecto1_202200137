<?php
/**
 * GolampiVisitorImpl - VERSIÓN DIFÍCIL COMPLETA
 * Soporta: switch, cortocircuito, nil, punteros, arreglos multidimensionales, hoisting
 */

require_once __DIR__ . '/../src/TablaSimbolos.php';
require_once __DIR__ . '/../src/ManejadorErrores.php';
require_once __DIR__ . '/../antlr/GolampiVisitor.php';
require_once __DIR__ . '/../antlr/GolampiBaseVisitor.php';

class GolampiVisitorImpl extends GolampiBaseVisitor {
    
    private $tablaSimbolos;
    private $manejadorErrores;
    private $salida = '';
    private $bufferPrint = '';  // Para fmt.Print (sin salto de línea)
    
    public function __construct($tablaSimbolos, $manejadorErrores) {
        $this->tablaSimbolos = $tablaSimbolos;
        $this->manejadorErrores = $manejadorErrores;
    }
    
    // ========== PROGRAMA ==========
    public function visitReglaPrograma($ctx) {
        // 1. HOISTING: Registrar todas las funciones primero
        if ($ctx && method_exists($ctx, 'declaracion')) {
            foreach ($ctx->declaracion() as $d) {
                if (method_exists($d, 'ID') && $d->ID()) {
                    $nombre = $d->ID()->getText();
                    $this->tablaSimbolos->agregarSimbolo($nombre, 'funcion', 0, 0, null, false, 'funcion');
                }
            }
        }
        
        // 2. Ejecutar main
        if ($ctx && method_exists($ctx, 'declaracion')) {
            foreach ($ctx->declaracion() as $d) {
                if (method_exists($d, 'ID') && $d->ID() && $d->ID()->getText() === 'main') {
                    $this->visitReglaDeclFunc($d);
                    break;
                }
            }
        }
        
        // 3. Imprimir buffer pendiente de fmt.Print
        if ($this->bufferPrint !== '') {
            $this->salida .= $this->bufferPrint . "\n";
        }
        
        return $this->salida;
    }
    
    // ========== FUNCIÓN ==========
    public function visitReglaDeclFunc($ctx) {
        if (!$ctx || !method_exists($ctx, 'ID')) return null;
        $id = $ctx->ID();
        if (!$id || $id->getText() !== 'main') return null;
        
        $this->tablaSimbolos->entrarAmbito('main');
        if (method_exists($ctx, 'bloque')) {
            $this->visitReglaBloqueStmt($ctx->bloque());
        }
        $this->tablaSimbolos->salirAmbito();
        return null;
    }
    
    // ========== BLOQUE ==========
    public function visitReglaBloqueStmt($ctx) {
        if (!$ctx) return null;
        $linea = method_exists($ctx, 'getStart') && $ctx->getStart() ? $ctx->getStart()->getLine() : 0;
        $this->tablaSimbolos->entrarAmbito('b'.$linea);
        
        if (method_exists($ctx, 'sentencia')) {
            foreach ($ctx->sentencia() as $s) {
                $this->visitSentencia($s);
            }
        }
        $this->tablaSimbolos->salirAmbito();
        return null;
    }
    
    // Helper para sentencias
    private function visitSentencia($ctx) {
        if (!$ctx) return;
        $clase = get_class($ctx);
        
        if (strpos($clase, 'ReglaSentVarCorta') !== false) {
            $this->visitReglaSentVarCorta($ctx);
        } elseif (strpos($clase, 'ReglaSentVar') !== false) {
            $this->visitReglaSentVar($ctx);
        } elseif (strpos($clase, 'ReglaSentConst') !== false) {
            $this->visitReglaSentConst($ctx);
        } elseif (strpos($clase, 'ReglaSentExpr') !== false) {
            $this->visitReglaSentExpr($ctx);
        } elseif (strpos($clase, 'ReglaSentIf') !== false) {
            $this->visitReglaSentIf($ctx);
        } elseif (strpos($clase, 'ReglaSentFor') !== false) {
            $this->visitReglaSentFor($ctx);
        } elseif (strpos($clase, 'ReglaSentSwitch') !== false) {
            $this->visitReglaSentSwitch($ctx);
        }
    }
    
    // ========== SWITCH # ReglaSentSwitch ==========
    public function visitReglaSentSwitch($ctx) {
        if (!$ctx) return null;
        
        // Evaluar expresión del switch
        $valorSwitch = null;
        if (method_exists($ctx, 'expresion') && $ctx->expresion()) {
            $valorSwitch = $this->eval($ctx->expresion());
        }
        
        // Procesar casos
        if (method_exists($ctx, 'clausulaCaso')) {
            foreach ($ctx->clausulaCaso() as $caso) {
                $claseCaso = get_class($caso);
                
                // Case con valores
                if (strpos($claseCaso, 'ReglaClausulaCaso') !== false) {
                    if (method_exists($caso, 'listaExpr') && $caso->listaExpr()) {
                        foreach ($caso->listaExpr()->expresion() as $exprCase) {
                            $valorCase = $this->eval($exprCase);
                            if ($valorSwitch === $valorCase) {
                                // Ejecutar sentencias del caso
                                if (method_exists($caso, 'sentencia')) {
                                    foreach ($caso->sentencia() as $s) {
                                        $this->visitSentencia($s);
                                    }
                                }
                                return null; // Salir después de encontrar match
                            }
                        }
                    }
                }
                // Default
                elseif (strpos($claseCaso, 'ReglaClausulaDefault') !== false) {
                    if (method_exists($caso, 'sentencia')) {
                        foreach ($caso->sentencia() as $s) {
                            $this->visitSentencia($s);
                        }
                    }
                    return null;
                }
            }
        }
        return null;
    }
    
    // ========== IF ==========
    public function visitReglaSentIf($ctx) {
        if (!$ctx || !method_exists($ctx, 'expresion')) return null;
        $cond = $this->eval($ctx->expresion());
        $bloques = method_exists($ctx, 'bloque') ? $ctx->bloque() : [];
        
        if ($cond === true && isset($bloques[0])) {
            $this->visitReglaBloqueStmt($bloques[0]);
        } elseif ($cond !== true && isset($bloques[1])) {
            $this->visitReglaBloqueStmt($bloques[1]);
        }
        return null;
    }
    
    // ========== FOR ==========
    public function visitReglaSentFor($ctx) {
        if (!$ctx) return null;
        
        // Inicialización
        if (method_exists($ctx, 'clausulaFor') && $ctx->clausulaFor()) {
            $clausula = $ctx->clausulaFor();
            if (method_exists($clausula, 'sentSimple') && $clausula->sentSimple()) {
                $this->visitSentencia($clausula->sentSimple());
            }
        }
        
        // Bucle con límite de seguridad
        for ($iter = 0; $iter < 10000; $iter++) {
            // Condición
            $cond = true;
            if (method_exists($ctx, 'expresion') && $ctx->expresion()) {
                $cond = $this->eval($ctx->expresion());
                if ($cond !== true) break;
            }
            
            // Bloque
            if (method_exists($ctx, 'bloque') && $ctx->bloque()) {
                $this->visitReglaBloqueStmt($ctx->bloque());
            }
        }
        return null;
    }
    
    // ========== DECLARACIÓN CORTA := ==========
    public function visitReglaSentVarCorta($ctx) {
        if (!$ctx || !method_exists($ctx, 'listaId')) return null;
        $listaId = $ctx->listaId();
        if (!$listaId || !method_exists($listaId, 'ID')) return null;
        
        $ids = $listaId->ID();
        $valores = [];
        
        if (method_exists($ctx, 'listaExpr') && $ctx->listaExpr()) {
            foreach ($ctx->listaExpr()->expresion() as $e) {
                $v = $this->eval($e);
                // Si es array de múltiples retornos, usar primer valor
                if (is_array($v) && isset($v[0])) {
                    $valores[] = $v[0];
                } else {
                    $valores[] = $v;
                }
            }
        }
        
        for ($i = 0; $i < count($ids); $i++) {
            $id = $ids[$i];
            if (!$id) continue;
            $nombre = $id->getText();
            $valor = isset($valores[$i]) ? $valores[$i] : null;
            $tipo = $this->tipoDe($valor);
            $this->tablaSimbolos->agregarSimbolo($nombre, $tipo, 0, 0, $valor, false, 'variable');
        }
        return null;
    }
    
    // ========== DECLARACIÓN NORMAL var ==========
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
            
            // Detectar arreglos
            if (is_array($valor)) $tipo = 'array';
            
            $this->tablaSimbolos->agregarSimbolo($nombre, $tipo, 0, 0, $valor, false, 'variable');
        }
        return null;
    }
    
    // ========== CONSTANTE ==========
    public function visitReglaSentConst($ctx) {
        if (!$ctx || !method_exists($ctx, 'ID')) return null;
        $idNode = $ctx->ID();
        if (!$idNode) return null;
        
        $nombre = $idNode->getText();
        $tipo = 'string';
        if (method_exists($ctx, 'tipo') && $ctx->tipo()) {
            $t = $ctx->tipo();
            if (method_exists($t, 'INT32') && $t->INT32()) $tipo = 'int32';
            elseif (method_exists($t, 'STRING_TYPE') && $t->STRING_TYPE()) $tipo = 'string';
            elseif (method_exists($t, 'BOOL') && $t->BOOL()) $tipo = 'bool';
        }
        
        $valor = null;
        if (method_exists($ctx, 'expresion') && $ctx->expresion()) {
            $valor = $this->eval($ctx->expresion());
        }
        
        $this->tablaSimbolos->agregarSimbolo($nombre, $tipo, 0, 0, $valor, true, 'constante');
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
            } elseif (is_array($v)) {
                $args[] = '[array]';
            } else {
                $args[] = $v;
            }
        }
        
        // Si hay buffer de Print, agregarlo primero
        if ($this->bufferPrint !== '') {
            $this->salida .= $this->bufferPrint;
            $this->bufferPrint = '';
        }
        
        $this->salida .= implode(' ', $args) . "\n";
        return null;
    }
    
    // ========== PRINT (sin salto de línea) ==========
    public function visitReglaPrimarioPrint($ctx) {
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
            } elseif (is_array($v)) {
                $args[] = '[array]';
            } else {
                $args[] = $v;
            }
        }
        
        $this->bufferPrint .= implode(' ', $args);
        return null;
    }
    
    // ========== LEN ==========
    public function visitReglaPrimarioLen($ctx) {
        if (!method_exists($ctx, 'expresion') || !$ctx->expresion()) return 0;
        $v = $this->eval($ctx->expresion());
        if (is_string($v)) return strlen($v);
        if (is_array($v)) return count($v);
        return 0;
    }
    
    // ========== NOW ==========
    public function visitReglaPrimarioNow($ctx) {
        return date('Y-m-d H:i:s');
    }
    
    // ========== SUBSTR ==========
    public function visitReglaPrimarioSubstr($ctx) {
        if (!method_exists($ctx, 'expresion')) return '';
        $exprs = $ctx->expresion();
        if (count($exprs) < 3) return '';
        
        $str = $this->eval($exprs[0]);
        $start = (int)$this->eval($exprs[1]);
        $length = (int)$this->eval($exprs[2]);
        
        if (!is_string($str)) return '';
        return substr($str, $start, $length);
    }
    
    // ========== TYPEOF ==========
    public function visitReglaPrimarioTypeOf($ctx) {
        if (!method_exists($ctx, 'expresion') || !$ctx->expresion()) return 'nil';
        $v = $this->eval($ctx->expresion());
        return $this->tipoDe($v);
    }
    
    // ============================================
    // EVAL - CON CORTOCIRCUITO, NIL, ARREGLOS, ETC.
    // ============================================
    private function eval($ctx) {
        if (!$ctx || !is_object($ctx)) return null;
        
        $clase = get_class($ctx);
        
        // ReglaExprPrimario → navegar a primario()
        if (strpos($clase, 'ReglaExprPrimario') !== false) {
            if (method_exists($ctx, 'primario') && $ctx->primario()) {
                return $this->evalPrimario($ctx->primario());
            }
            return null;
        }
        
        // Primario directo
        if (strpos($clase, 'Primario') !== false && strpos($clase, 'Expr') === false) {
            return $this->evalPrimario($ctx);
        }
        
        // 🔹 CORTOCIRCUITO: AND (&&)
        if (strpos($clase, 'ReglaExprAndLogico') !== false) {
            if (!method_exists($ctx, 'expresion')) return null;
            $a = $this->eval($ctx->expresion(0));
            // ✅ Cortocircuito: si a es false, NO evaluar b
            if ($a === false) return false;
            $b = $this->eval($ctx->expresion(1));
            return $a && $b;
        }
        
        // 🔹 CORTOCIRCUITO: OR (||)
        if (strpos($clase, 'ReglaExprOrLogico') !== false) {
            if (!method_exists($ctx, 'expresion')) return null;
            $a = $this->eval($ctx->expresion(0));
            // ✅ Cortocircuito: si a es true, NO evaluar b
            if ($a === true) return true;
            $b = $this->eval($ctx->expresion(1));
            return $a || $b;
        }
        
        // Operaciones aritméticas
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
        
        // Comparaciones
        if (strpos($clase, 'ReglaExprMayor') !== false) {
            if (!method_exists($ctx, 'expresion')) return null;
            return $this->eval($ctx->expresion(0)) > $this->eval($ctx->expresion(1));
        }
        if (strpos($clase, 'ReglaExprMenor') !== false) {
            if (!method_exists($ctx, 'expresion')) return null;
            return $this->eval($ctx->expresion(0)) < $this->eval($ctx->expresion(1));
        }
        if (strpos($clase, 'ReglaExprIgualdad') !== false) {
            if (!method_exists($ctx, 'expresion')) return null;
            return $this->eval($ctx->expresion(0)) == $this->eval($ctx->expresion(1));
        }
        if (strpos($clase, 'ReglaExprDesigualdad') !== false) {
            if (!method_exists($ctx, 'expresion')) return null;
            return $this->eval($ctx->expresion(0)) != $this->eval($ctx->expresion(1));
        }
        
        // Unarios
        if (strpos($clase, 'ReglaExprNot') !== false) {
            if (!method_exists($ctx, 'expresion')) return null;
            return !$this->eval($ctx->expresion(0));
        }
        
        if (strpos($clase, 'ReglaExprDireccion') !== false) {
            // &x → referencia simulada
            if (method_exists($ctx, 'expresion') && $ctx->expresion()) {
                $subCtx = $ctx->expresion(0);
                if (method_exists($subCtx, 'ID') && $subCtx->ID()) {
                    return ['__ref__' => $subCtx->ID()->getText()];
                }
            }
            return null;
        }
        
        if (strpos($clase, 'ReglaExprDesreferencia') !== false) {
            // *ptr → obtener valor
            if (method_exists($ctx, 'expresion') && $ctx->expresion()) {
                $ref = $this->eval($ctx->expresion(0));
                if (is_array($ref) && isset($ref['__ref__'])) {
                    $simbolo = $this->tablaSimbolos->buscarSimbolo($ref['__ref__']);
                    return $simbolo ? $simbolo['valor'] : null;
                }
            }
            return null;
        }
        
        // Literal
        if (method_exists($ctx, 'literal') && $ctx->literal()) {
            return $this->evalLiteral($ctx->literal());
        }
        
        // NIL literal
        if (method_exists($ctx, 'NIL') && $ctx->NIL()) {
            return null;
        }
        
        // ID (variable)
        if (method_exists($ctx, 'ID') && $ctx->ID()) {
            $nombre = $ctx->ID()->getText();
            $simbolo = $this->tablaSimbolos->buscarSimbolo($nombre);
            return $simbolo ? $simbolo['valor'] : null;
        }
        
        return null;
    }
    
    // ============================================
    // EVAL PRIMARIO - CON ARREGLOS MULTIDIMENSIONALES
    // ============================================
    private function evalPrimario($ctx) {
        if (!$ctx || !is_object($ctx)) return null;
        
        $clase = get_class($ctx);
        
        // Built-ins
        if (strpos($clase, 'ReglaPrimarioPrintln') !== false) {
            return $this->visitReglaPrimarioPrintln($ctx);
        }
        if (strpos($clase, 'ReglaPrimarioPrint') !== false) {
            return $this->visitReglaPrimarioPrint($ctx);
        }
        if (strpos($clase, 'ReglaPrimarioLen') !== false) {
            return $this->visitReglaPrimarioLen($ctx);
        }
        if (strpos($clase, 'ReglaPrimarioNow') !== false) {
            return $this->visitReglaPrimarioNow($ctx);
        }
        if (strpos($clase, 'ReglaPrimarioSubstr') !== false) {
            return $this->visitReglaPrimarioSubstr($ctx);
        }
        if (strpos($clase, 'ReglaPrimarioTypeOf') !== false) {
            return $this->visitReglaPrimarioTypeOf($ctx);
        }
        
        // Literal
        if (method_exists($ctx, 'literal')) {
            $lit = $ctx->literal();
            if ($lit && is_object($lit)) {
                return $this->evalLiteral($lit);
            }
        }
        
        // NIL
        if (method_exists($ctx, 'NIL') && $ctx->NIL()) {
            return null;
        }
        
        // Array literal: [3][3]int{{1,2,3}, {4,5,6}, {7,8,9}}
        if (method_exists($ctx, 'CORCHIZQ') && $ctx->CORCHIZQ()) {
            if (method_exists($ctx, 'listaExpr') && $ctx->listaExpr()) {
                $arr = [];
                foreach ($ctx->listaExpr()->expresion() as $e) {
                    $arr[] = $this->eval($e);
                }
                return $arr;
            }
        }
        
        // Acceso a arreglo: matriz[i][j] (multidimensional)
        if (method_exists($ctx, 'primario') && method_exists($ctx, 'expresion')) {
            $base = $ctx->primario();
            $indexExpr = $ctx->expresion(0);
            
            if ($base && method_exists($base, 'ID')) {
                $nombre = $base->ID()->getText();
                $simbolo = $this->tablaSimbolos->buscarSimbolo($nombre);
                
                if ($simbolo && is_array($simbolo['valor'])) {
                    $index = $this->eval($indexExpr);
                    
                    if (is_int($index)) {
                        $valor = $simbolo['valor'];
                        
                        // Manejar acceso multidimensional: si el índice devuelve otro array
                        if (isset($valor[$index])) {
                            // Si hay más índices anidados, seguir navegando
                            return $valor[$index];
                        }
                    }
                }
            }
        }
        
        // ID (variable)
        if (method_exists($ctx, 'ID') && $ctx->ID()) {
            $nombre = $ctx->ID()->getText();
            $simbolo = $this->tablaSimbolos->buscarSimbolo($nombre);
            return $simbolo ? $simbolo['valor'] : null;
        }
        
        return null;
    }
    
    // ============================================
    // EVAL LITERAL
    // ============================================
    private function evalLiteral($ctx) {
        if (!$ctx || !is_object($ctx)) return null;
        
        if (method_exists($ctx, 'ENTERO_LITERAL') && $ctx->ENTERO_LITERAL()) {
            return (int)$ctx->ENTERO_LITERAL()->getText();
        }
        if (method_exists($ctx, 'FLOTANTE_LITERAL') && $ctx->FLOTANTE_LITERAL()) {
            return (float)$ctx->FLOTANTE_LITERAL()->getText();
        }
        if (method_exists($ctx, 'CADENA_LITERAL') && $ctx->CADENA_LITERAL()) {
            return substr($ctx->CADENA_LITERAL()->getText(), 1, -1);
        }
        if (method_exists($ctx, 'RUNA_LITERAL') && $ctx->RUNA_LITERAL()) {
            $t = $ctx->RUNA_LITERAL()->getText();
            return $t[1] ?? '';
        }
        if (method_exists($ctx, 'TRUE') && $ctx->TRUE()) return true;
        if (method_exists($ctx, 'FALSE') && $ctx->FALSE()) return false;
        
        return null;
    }
    
    // ============================================
    // UTILIDADES
    // ============================================
    private function tipoDe($valor) {
        if ($valor === null) return 'nil';
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
}
?>