<?php
class GeneradorReportes {
    public function generarCSVErrores($errores) {
        $csv = "#,Tipo,Descripción,Línea,Columna\n";
        
        foreach ($errores as $error) {
            $descripcion = str_replace(',', ';', $error['descripcion']);
            $descripcion = str_replace("\n", ' ', $descripcion);
            
            $csv .= "{$error['numero']},{$error['tipo']},{$descripcion},";
            $csv .= "{$error['linea']},{$error['columna']}\n";
        }
        
        return $csv;
    }
    
    
    public function generarJSONErrores($errores) {
        return json_encode([
            'total' => count($errores),
            'errores' => $errores
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
    
   
    public function generarCSVSimbolos($simbolos) {
        $csv = "Identificador,Tipo,Ámbito,Valor,Línea,Columna,Categoría\n";
        
        foreach ($simbolos as $simbolo) {
            $valor = $simbolo['valor'];
            
            if ($valor === null) {
                $valor = '—';
            } elseif (is_array($valor)) {
                $valor = json_encode($valor);
            }
            
            $valor = str_replace(',', ';', $valor);
            
            $csv .= "{$simbolo['nombre']},{$simbolo['tipo']},{$simbolo['ambito']},";
            $csv .= "{$valor},{$simbolo['linea']},{$simbolo['columna']},";
            $csv .= "{$simbolo['categoria']}\n";
        }
        
        return $csv;
    }
    
    
    public function generarJSONSimbolos($simbolos) {
        return json_encode([
            'total' => count($simbolos),
            'simbolos' => $simbolos
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
    
    public function descargarCSV($contenido, $nombreArchivo) {
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename="' . $nombreArchivo . '"');
        echo $contenido;
        exit;
    }
    
    public function descargarJSON($contenido, $nombreArchivo) {
        header('Content-Type: application/json; charset=utf-8');
        header('Content-Disposition: attachment; filename="' . $nombreArchivo . '"');
        echo $contenido;
        exit;
    }
}
?>