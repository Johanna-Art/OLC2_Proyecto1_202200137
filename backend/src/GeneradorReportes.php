<?php
class GeneradorReportes {
    
    public function generarCSVErrores($errores) {
        $csv = "Id,Tipo,Descripcion,Linea,Columna\n";
        foreach ($errores as $i => $e) {
            $csv .= ($i+1) . "," . 
                   ($e['tipo'] ?? 'Desconocido') . "," . 
                   '"' . str_replace('"', '""', $e['descripcion'] ?? '') . '",' . 
                   ($e['linea'] ?? 0) . "," . 
                   ($e['columna'] ?? 0) . "\n";
        }
        return $csv;
    }
    

    public function generarCSVSimbolos($simbolos) {
        $csv = "Identificador,Tipo,Ambito,Valor,Linea,Columna,Categoria\n";
        foreach ($simbolos as $s) {
            $valor = $s['valor'] ?? '';
            if (is_array($valor)) $valor = '[array]';
            if (is_bool($valor)) $valor = $valor ? 'true' : 'false';
            if ($valor === null) $valor = 'nil';
            
            $csv .= '"' . ($s['nombre'] ?? '') . '",' . 
                   ($s['tipo'] ?? '') . ',' . 
                   ($s['ambito'] ?? '') . ',' . 
                   '"' . str_replace('"', '""', $valor) . '",' . 
                   ($s['linea'] ?? 0) . ',' . 
                   ($s['columna'] ?? 0) . ',' . 
                   ($s['categoria'] ?? '') . "\n";
        }
        return $csv;
    }
    
    public function generarAST($ctx, $nivel = 0) {
        if (!$ctx) return null;
        
        $clase = get_class($ctx);
        $nombre = preg_replace('/^(Context\\\\)?(.*?)(Context)?$/', '$2', $clase);
        
        $nodo = [
            'tipo' => $nombre,
            'nivel' => $nivel,
            'hijos' => []
        ];
        
        // Agregar informacion del token si está disponible
        if (method_exists($ctx, 'getStart')) {
            $start = $ctx->getStart();
            if ($start) {
                $nodo['linea'] = $start->getLine();
                $nodo['columna'] = $start->getCharPositionInLine();
                $nodo['texto'] = $start->getText();
            }
        }
        
        // Recorrer hijos del contexto
        if (method_exists($ctx, 'children')) {
            foreach ($ctx->children as $child) {
                if (is_object($child)) {
                    $hijo = $this->generarAST($child, $nivel + 1);
                    if ($hijo) {
                        $nodo['hijos'][] = $hijo;
                    }
                }
            }
        }
        
        if (empty($nodo['hijos']) && method_exists($ctx, 'ID') && $ctx->ID()) {
            $nodo['valor'] = $ctx->ID()->getText();
        }
        
        return $nodo;
    }
    

    public function generarASTTexto($ast, $prefijo = '') {
        if (!$ast) return '';
        
        $texto = $prefijo . '├─ ' . $ast['tipo'];
        if (isset($ast['valor'])) $texto .= ' = ' . $ast['valor'];
        if (isset($ast['linea'])) $texto .= ' [L' . $ast['linea'] . ']';
        $texto .= "\n";
        
        if (isset($ast['hijos']) && is_array($ast['hijos'])) {
            foreach ($ast['hijos'] as $hijo) {
                $texto .= $this->generarASTTexto($hijo, $prefijo . '│  ');
            }
        }
        
        return $texto;
    }
}
?>