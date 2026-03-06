<?php
require_once 'TablaSimbolos.php';
require_once 'ManejadorErrores.php';

class AnalizadorSemantico {
    
    private $tablaSimbolos;
    private $manejadorErrores;
    
    // Tipos de datos validos 
    private $tiposValidos = ['int32', 'float32', 'bool', 'rune', 'string'];
    
    // Matriz de compatibilidad para operaciones aritméticas 
    private $compatibilidadAritmetica = [
        'int32' => ['int32' => 'int32', 'float32' => 'float32', 'rune' => 'int32'],
        'float32' => ['int32' => 'float32', 'float32' => 'float32', 'rune' => 'float32'],
        'rune' => ['int32' => 'int32', 'float32' => 'float32', 'rune' => 'int32'],
        'string' => ['string' => 'string'] 
    ];
    
 
    public function __construct($tablaSimbolos, $manejadorErrores) { // constructor del semantico
        $this->tablaSimbolos = $tablaSimbolos;
        $this->manejadorErrores = $manejadorErrores;
    }
    
    /**
     * Verifica si un tipo de dato es válido 
     * 
     * @param string $tipo 
     * @return bool True si es válido
     */
    public function esTipoValido($tipo) {
        return in_array($tipo, $this->tiposValidos);
    }
    
    /**
     * Verifica compatibilidad de tipos para operación aritmética
     * 
     * @param string $tipo1 Tipo del primer operando
     * @param string $tipo2 Tipo del segundo operando
     * @param string $operador Operador (+, -, *, /, %)
     * @return string|null Tipo resultante 
     */
    public function verificarCompatibilidadAritmetica($tipo1, $tipo2, $operador) {
        if ($tipo1 === 'string' && $tipo2 === 'string' && $operador === '+') {
            return 'string';
        }
        
        if (isset($this->compatibilidadAritmetica[$tipo1][$tipo2])) {
            return $this->compatibilidadAritmetica[$tipo1][$tipo2];
        }
        
        return null; 
    }
    
    /**
     * Verifica compatibilidad de tipos para operación relacional
     * 
     * @param string $tipo1 Tipo del primer operando
     * @param string $tipo2 Tipo del segundo operando
     * @return bool True si son compatibles
     */
    public function verificarCompatibilidadRelacional($tipo1, $tipo2) {  // Los tipos deben ser iguales para comparar
        return $tipo1 === $tipo2;
    }
    
    /**
     * Verifica compatibilidad de tipos para operación lógica
     * 
     * @param string $tipo1 Tipo del primer operando
     * @param string $tipo2 Tipo del segundo operando
     * @return bool True si ambos son bool
     */
    public function verificarCompatibilidadLogica($tipo1, $tipo2) {
        return $tipo1 === 'bool' && $tipo2 === 'bool';
    }
    
    /**
     * Verifica si una variable está declarada antes de usarse
     * 
     * @param string $nombre Nombre de la variable
     * @param int $linea Línea de uso
     * @param int $columna Columna de uso
     * @return bool True si está declarada
     */
    public function verificarVariableDeclarada($nombre, $linea, $columna) {
        $simbolo = $this->tablaSimbolos->buscarSimbolo($nombre);
        
        if ($simbolo === null) {
            $this->manejadorErrores->agregarErrorSemantico(
                "Variable '{$nombre}' no declarada en el ámbito actual",
                $linea,
                $columna
            );
            return false;
        }
        
        return true;
    }
    
    /**
     * Verifica que no se reutilice un identificador en el mismo ámbito
     * 
     * @param string $nombre Nombre del identificador
     * @param int $linea Línea de declaración
     * @param int $columna Columna de declaración
     * @return bool True si no hay conflicto
     */
    public function verificarIdentificadorUnico($nombre, $linea, $columna) {
        $simbolo = $this->tablaSimbolos->buscarSimbolo($nombre);
        
        // Solo error si está en el mismo ámbito
        if ($simbolo !== null && $simbolo['ambito'] === $this->tablaSimbolos->obtenerAmbitoActual()) {
            $this->manejadorErrores->agregarErrorSemantico(
                "Identificador '{$nombre}' ya ha sido declarado en este ámbito",
                $linea,
                $columna
            );
            return false;
        }
        
        return true;
    }
    
    /**
     * Verifica compatibilidad de tipos en asignación
     * 
     * @param string $tipoVariable Tipo de la variable destino
     * @param string $tipoExpresion Tipo de la expresión a asignar
     * @param int $linea Línea de asignación
     * @param int $columna Columna de asignación
     * @return bool True si son compatibles
     */
    public function verificarAsignacion($tipoVariable, $tipoExpresion, $linea, $columna) {
        if ($tipoVariable === $tipoExpresion) {
            return true;
        }
        if ($tipoVariable === 'float32' && $tipoExpresion === 'int32') {
            return true;
        }
        
        $this->manejadorErrores->agregarErrorSemantico(
            "Incompatibilidad de tipos: no se puede asignar '{$tipoExpresion}' a variable de tipo '{$tipoVariable}'",
            $linea,
            $columna
        );
        
        return false;
    }
    
    /**
     * Verifica que exista la función main 
     * 
     * @return bool True si existe main
     */
    public function verificarFuncionMain() {
        $main = $this->tablaSimbolos->buscarSimbolo('main');
        
        if ($main === null || $main['categoria'] !== 'funcion') {
            $this->manejadorErrores->agregarErrorSemantico(
                "El programa debe contener una función 'main'",
                0,
                0
            );
            return false;
        }
        
        return true;
    }
}
?>