<?php
class ManejadorErrores {
    
    // Lista de todos los errores encontrados
    private $errores = [];
    
    // Contadores por tipo de error
    private $contadorLexico = 0;
    private $contadorSintactico = 0;
    private $contadorSemantico = 0;
    
    public function agregarError($tipo, $descripcion, $linea, $columna) {
        $this->errores[] = [
            'numero' => count($this->errores) + 1,
            'tipo' => $tipo,
            'descripcion' => $descripcion,
            'linea' => $linea,
            'columna' => $columna
        ];
        
        // Actualizar contadores
        if ($tipo === 'Léxico') {
            $this->contadorLexico++;
        } elseif ($tipo === 'Sintáctico') {
            $this->contadorSintactico++;
        } elseif ($tipo === 'Semántico') {
            $this->contadorSemantico++;
        }
    }
    
   
    public function agregarErrorLexico($descripcion, $linea, $columna) {
        $this->agregarError('Léxico', $descripcion, $linea, $columna);
    }
    
  
    public function agregarErrorSintactico($descripcion, $linea, $columna) {
        $this->agregarError('Sintáctico', $descripcion, $linea, $columna);
    }
    
   
    public function agregarErrorSemantico($descripcion, $linea, $columna) {
        $this->agregarError('Semántico', $descripcion, $linea, $columna);
    }
   
    public function obtenerErrores() {
        return $this->errores;
    }
    
 
    public function hayErrores() {
        return !empty($this->errores);
    }
    
   
    public function contarErrores() {
        return count($this->errores);
    }
    
   
    public function obtenerErroresPorTipo($tipo) {
        return array_filter($this->errores, function($error) use ($tipo) {
            return $error['tipo'] === $tipo;
        });
    }
  
    public function limpiar() {
        $this->errores = [];
        $this->contadorLexico = 0;
        $this->contadorSintactico = 0;
        $this->contadorSemantico = 0;
    }
    
  
    public function generarResumen() {
        $resumen = "=== RESUMEN DE ERRORES ===\n";
        $resumen .= "Léxicos: {$this->contadorLexico}\n";
        $resumen .= "Sintácticos: {$this->contadorSintactico}\n";
        $resumen .= "Semánticos: {$this->contadorSemantico}\n";
        $resumen .= "TOTAL: " . $this->contarErrores() . "\n";
        return $resumen;
    }
}
?>