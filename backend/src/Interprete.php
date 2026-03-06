<?php
require_once 'TablaSimbolos.php';
require_once 'ManejadorErrores.php';
require_once 'AnalizadorSemantico.php';

class Interprete {
    
    private $tablaSimbolos;
    private $manejadorErrores;
    private $analizador;
    private $salida = '';
    
     // constructor del interprete
    public function __construct($tablaSimbolos, $manejadorErrores, $analizador) {
        $this->tablaSimbolos = $tablaSimbolos;
        $this->manejadorErrores = $manejadorErrores;
        $this->analizador = $analizador;
    }
    
    public function ejecutar($arbolSintactico) {
        // Se verifica que existe main
        if (!$this->analizador->verificarFuncionMain()) {
            return "ERROR: No se encontró la función main\n";
        }
        
        // Si hay errores semanticos, no ejecutar
        if ($this->manejadorErrores->hayErrores()) {
            return "ERROR: Hay errores semánticos que impiden la ejecución\n";
        }
        
        // Aquí iría la lógica de recorrido del árbol con Visitor
        // Para ahora, retornamos salida de prueba
        $this->salida = "Programa ejecutado correctamente\n";
        
        return $this->salida;
    }
    
   
    public function imprimir($argumentos) {
        $texto = implode(' ', $argumentos);
        $this->salida .= $texto . "\n";
    }
    

    public function longitud($valor) {
        if (is_string($valor)) {
            return strlen($valor);
        } elseif (is_array($valor)) {
            return count($valor);
        }
        return 0;
    }
    
    public function fechaActual() {
        return date('Y-m-d H:i:s');
    }
    
    public function subcadena($cadena, $inicio, $longitud) {
        return substr($cadena, $inicio, $longitud);
    }
    
    public function tipoDe($valor) {
        if (is_int($valor)) {
            return 'int32';
        } elseif (is_float($valor)) {
            return 'float32';
        } elseif (is_bool($valor)) {
            return 'bool';
        } elseif (is_string($valor)) {
            return 'string';
        }
        return 'unknown';
    }
    public function obtenerSalida() {
        return $this->salida;
    }
    
    public function limpiarSalida() {
        $this->salida = '';
    }
}
?>