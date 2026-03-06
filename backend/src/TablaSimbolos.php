<?php
class TablaSimbolos {
    
    private $simbolos = [];
    private $pilaAmbitos = ['global'];
    
    public function entrarAmbito($nombreAmbito) {
        $this->pilaAmbitos[] = $nombreAmbito;
    }
    
    public function salirAmbito() {
        if (count($this->pilaAmbitos) > 1) {
            array_pop($this->pilaAmbitos);
        }
    }
    
    public function obtenerAmbitoActual() {
        return end($this->pilaAmbitos);
    }
  
    public function agregarSimbolo(
        $nombre,           
        $tipo,             
        $linea,            
        $columna,          
        $valor = null,     
        $esConstante = false, 
        $categoria = 'variable' 
    ) {
        $ambito = $this->obtenerAmbitoActual();
        $clave = $ambito . '.' . $nombre;
        
        if (isset($this->simbolos[$clave])) {
            return false;
        }
        
        $this->simbolos[$clave] = [
            'nombre' => $nombre,
            'tipo' => $tipo,
            'valor' => $valor,
            'ambito' => $ambito,
            'linea' => $linea,
            'columna' => $columna,
            'esConstante' => $esConstante,
            'categoria' => $categoria
        ];
        
        return true;
    }
    
    public function buscarSimbolo($nombre) {
        for ($i = count($this->pilaAmbitos) - 1; $i >= 0; $i--) {
            $clave = $this->pilaAmbitos[$i] . '.' . $nombre;
            if (isset($this->simbolos[$clave])) {
                return $this->simbolos[$clave];
            }
        }
        return null;
    }
    
    public function actualizarValor($nombre, $nuevoValor) {
        $simbolo = $this->buscarSimbolo($nombre);
        if ($simbolo === null) return false;
        if ($simbolo['esConstante']) return false;
        
        $clave = $simbolo['ambito'] . '.' . $nombre;
        $this->simbolos[$clave]['valor'] = $nuevoValor;
        return true;
    }
    
    public function obtenerTablaCompleta() {
        return array_values($this->simbolos);
    }
    
    public function limpiar() {
        $this->simbolos = [];
        $this->pilaAmbitos = ['global'];
    }
}
?>
