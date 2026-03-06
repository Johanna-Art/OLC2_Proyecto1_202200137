let reportesActuales = null;

// Actualizar números de línea del editor
function actualizarLineasEditor() {
    const editor = document.getElementById('editor');
    const lineNumbers = document.getElementById('editorLineNumbers');
    const lineas = editor.value.split('\n').length;
    let html = '';
    for (let i = 1; i <= lineas; i++) {
        html += `<div>${i}</div>`;
    }
    lineNumbers.innerHTML = html;
    lineNumbers.scrollTop = editor.scrollTop;
}

// Actualizar números de línea de la consola
function actualizarLineasConsola() {
    const output = document.getElementById('output');
    const lineNumbers = document.getElementById('consoleLineNumbers');
    const lineas = output.textContent.split('\n').length;
    let html = '';
    for (let i = 1; i <= lineas; i++) {
        html += `<div>${i}</div>`;
    }
    lineNumbers.innerHTML = html;
    lineNumbers.scrollTop = output.scrollTop;
}

// Sincronizar scrolls
function sincronizarScrolls() {
    const editor = document.getElementById('editor');
    const editorLineNumbers = document.getElementById('editorLineNumbers');
    const output = document.getElementById('output');
    const consoleLineNumbers = document.getElementById('consoleLineNumbers');
    
    editor.addEventListener('scroll', () => {
        editorLineNumbers.scrollTop = editor.scrollTop;
    });
    
    output.addEventListener('scroll', () => {
        consoleLineNumbers.scrollTop = output.scrollTop;
    });
}

// Habilitar/Deshabilitar botones de descarga
function habilitarBotonesDescarga(enabled) {
    const btnResultado = document.getElementById('btnResultado');
    const btnErrores = document.getElementById('btnErrores');
    const btnSimbolos = document.getElementById('btnSimbolos');
    const btnAST = document.getElementById('btnAST');
    
    if (btnResultado) btnResultado.disabled = !enabled;
    if (btnErrores) btnErrores.disabled = !enabled;
    if (btnSimbolos) btnSimbolos.disabled = !enabled;
    if (btnAST) btnAST.disabled = !enabled;
    
    console.log('Botones habilitados:', enabled);
}

function ejecutar() {
    const code = document.getElementById('editor').value;
    const output = document.getElementById('output');
    
    if (!code.trim()) {
        output.textContent = 'El editor está vacío. Escribe código para ejecutar.';
        output.style.color = '#ffcc00';
        return;
    }
    
    output.textContent = 'Ejecutando';
    output.style.color = '#ffcc00';
    actualizarLineasConsola();
    
    // Deshabilitar botones de descarga mientras ejecuta
    habilitarBotonesDescarga(false);
    reportesActuales = null;
    
    console.log('Enviando código al backend...');
    
    fetch('/backend/index.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({codigo: code, accion: 'ejecutar'})
    })
    .then(res => {
        console.log('Status:', res.status);
        console.log('Headers:', res.headers);
        return res.text();
    })
    .then(text => {
        console.log('Respuesta backend:', text);
        
        try {
            const data = JSON.parse(text);
            console.log('Datos parseados:', data);
            
            if (data.exito) {
                // Mostrar salida en consola
                output.style.color = '#00ff88';
                output.textContent = data.salida || ' Código ejecutado sin salida';
                
                // Mostrar errores si los hay
                if (data.errores && data.errores.length > 0) {
                    output.textContent += '\n\n Errores:\n' + '─'.repeat(40) + '\n';
                    data.errores.forEach((e, i) => {
                        output.textContent += `[${i+1}] ${e.tipo} L${e.linea}: ${e.descripcion}\n`;
                    });
                }
                
                // guardar los reportes en csv
                reportesActuales = {
                    erroresCSV: data.reportes?.erroresCSV || '',
                    simbolosCSV: data.reportes?.simbolosCSV || '',
                    astJSON: data.reportes?.astJSON || '',
                    resultadoTXT: data.reportes?.resultadoTXT || btoa(data.salida || '')
                };
                
                console.log('Reportes guardados:', reportesActuales);
                
                // Mostrar tabla de símbolos
                if (data.tablaSimbolos && data.tablaSimbolos.length > 0) {
                    mostrarTablaSimbolos(data.tablaSimbolos);
                    document.getElementById('tablaSimbolosSection').style.display = 'block';
                } else {
                    document.getElementById('tablaSimbolosSection').style.display = 'none';
                }
                
                // Mostrar AST
                if (data.ast) {
                    mostrarAST(data.ast);
                    document.getElementById('astSection').style.display = 'block';
                } else {
                    document.getElementById('astSection').style.display = 'none';
                }
                
                habilitarBotonesDescarga(true);
                actualizarLineasConsola();
                
                console.log('Ejecución completada, botones habilitados');
                
            } else {
                output.style.color = '#ff6b6b';
                output.textContent = `Error: ${data.error || 'Error desconocido'}`;
                if (data.archivo) output.textContent += `\n ${data.archivo}:${data.linea}`;
                console.error('Backend error:', data);
                habilitarBotonesDescarga(false);
            }
        } catch (e) {
            output.style.color = '#ff6b6b';
            output.textContent = `Error al procesar respuesta: ${e.message}\n\nRespuesta: ${text.substring(0, 300)}`;
            console.error('Parse error:', e);
            console.error('Texto completo:', text);
            habilitarBotonesDescarga(false);
        }
    })
    .catch(err => {
        output.style.color = '#ff6b6b';
        output.textContent = ` Error de conexión: ${err.message}`;
        console.error('Fetch error:', err);
        habilitarBotonesDescarga(false);
    });
}

function mostrarTablaSimbolos(simbolos) {
    const container = document.getElementById('tablaSimbolos');
    if (!container) {
        console.error('No se encontró el contenedor tablaSimbolos');
        return;
    }
    
    if (!simbolos || simbolos.length === 0) {
        container.innerHTML = '<em>Sin símbolos</em>';
        return;
    }
    
    let html = '<table><thead><tr><th>Identificador</th><th>Tipo</th><th>Ámbito</th><th>Valor</th><th>Línea</th><th>Columna</th></tr></thead><tbody>';
    simbolos.forEach(s => {
        let valor = s.valor;
        if (Array.isArray(valor)) valor = '[array]';
        if (typeof valor === 'boolean') valor = valor ? 'true' : 'false';
        if (valor === null) valor = 'nil';
        if (!valor) valor = '-';
        
        html += `<tr>
            <td>${s.nombre || '-'}</td>
            <td>${s.tipo || '-'}</td>
            <td>${s.ambito || 'global'}</td>
            <td>${valor}</td>
            <td>${s.linea || '-'}</td>
            <td>${s.columna || '-'}</td>
        </tr>`;
    });
    html += '</tbody></table>';
    container.innerHTML = html;
}

function mostrarAST(ast) {
    const container = document.getElementById('astView');
    if (!container) {
        console.error('No se encontró el contenedor astView');
        return;
    }
    
    if (!ast) {
        container.textContent = 'Sin AST';
        return;
    }
    
    // Generar texto del AST de forma recursiva
    function astToText(nodo, prefijo = '', esUltimo = true) {
        let texto = '';
        const conector = esUltimo ? '└─ ' : '├─ ';
        const extension = esUltimo ? '   ' : '│  ';
        
        texto += prefijo + conector + nodo.tipo;
        if (nodo.valor) texto += ' = ' + nodo.valor;
        if (nodo.linea) texto += ' [L' + nodo.linea + ']';
        texto += '\n';
        
        if (nodo.hijos && Array.isArray(nodo.hijos)) {
            for (let i = 0; i < nodo.hijos.length; i++) {
                texto += astToText(nodo.hijos[i], prefijo + extension, i === nodo.hijos.length - 1);
            }
        }
        
        return texto;
    }
    
    container.textContent = astToText(ast);
}

function nuevo() {
    document.getElementById('editor').value = '';
    document.getElementById('output').textContent = '';
    const tablaSimbolos = document.getElementById('tablaSimbolos');
    const astView = document.getElementById('astView');
    const tablaSimbolosSection = document.getElementById('tablaSimbolosSection');
    const astSection = document.getElementById('astSection');
    
    if (tablaSimbolos) tablaSimbolos.innerHTML = '';
    if (astView) astView.textContent = '';
    if (tablaSimbolosSection) tablaSimbolosSection.style.display = 'none';
    if (astSection) astSection.style.display = 'none';
    
    reportesActuales = null;
    habilitarBotonesDescarga(false);
    actualizarLineasEditor();
    actualizarLineasConsola();
}

function limpiarConsola() {
    const output = document.getElementById('output');
    if (output) {
        output.textContent = '';
        actualizarLineasConsola();
    }
}

function guardar() {
    const code = document.getElementById('editor').value;
    const blob = new Blob([code], {type: 'text/plain'});
    const a = document.createElement('a');
    a.href = URL.createObjectURL(blob);
    a.download = 'codigo.golampi';
    a.click();
}

function cargar() {
    const input = document.createElement('input');
    input.type = 'file';
    input.accept = '.golampi,.txt';
    input.onchange = function(e) {
        const file = e.target.files[0];
        if (!file) return;
        const reader = new FileReader();
        reader.onload = function(ev) {
            document.getElementById('editor').value = ev.target.result;
            actualizarLineasEditor();
        };
        reader.readAsText(file);
    };
    input.click();
}

// Descargar resultado de ejecución
function descargarResultado() {
    console.log('Descargar resultado clicked', reportesActuales);
    
    if (!reportesActuales) {
        alert('Primero ejecuta el código para generar el resultado');
        return;
    }
    
    if (!reportesActuales.resultadoTXT) {
        alert('No hay resultado para descargar');
        return;
    }
    
    try {
        const txt = atob(reportesActuales.resultadoTXT);
        const blob = new Blob([txt], {type: 'text/plain'});
        const a = document.createElement('a');
        a.href = URL.createObjectURL(blob);
        a.download = 'resultado.txt';
        a.click();
        console.log(' Resultado descargado');
    } catch(e) {
        alert('Error al descargar: ' + e.message);
        console.error('Error:', e);
    }
}

// Descargar errores
function descargarErrores() {
    console.log('Descargar errores clicked', reportesActuales);
    
    if (!reportesActuales) {
        alert('Primero ejecuta el código para generar reportes');
        return;
    }
    
    if (!reportesActuales.erroresCSV) {
        alert(' No hay errores para descargar');
        return;
    }
    
    try {
        const csv = atob(reportesActuales.erroresCSV);
        const blob = new Blob([csv], {type: 'text/csv'});
        const a = document.createElement('a');
        a.href = URL.createObjectURL(blob);
        a.download = 'errores.csv';
        a.click();
        console.log(' Errores descargados');
    } catch(e) {
        alert('Error al descargar: ' + e.message);
        console.error('Error:', e);
    }
}

// Descargar tabla de símbolos
function descargarTablaSimbolos() {
    console.log('Descargar tabla símbolos clicked', reportesActuales);
    
    if (!reportesActuales) {
        alert('Primero ejecuta el código para generar reportes');
        return;
    }
    
    if (!reportesActuales.simbolosCSV) {
        alert('No hay tabla de símbolos para descargar');
        return;
    }
    
    try {
        const csv = atob(reportesActuales.simbolosCSV);
        const blob = new Blob([csv], {type: 'text/csv'});
        const a = document.createElement('a');
        a.href = URL.createObjectURL(blob);
        a.download = 'tabla_simbolos.csv';
        a.click();
        console.log('Tabla de símbolos descargada');
    } catch(e) {
        alert('Error al descargar: ' + e.message);
        console.error('Error:', e);
    }
}

// Descargar AST
function descargarAST() {
    console.log('Descargar AST clicked', reportesActuales);
    
    if (!reportesActuales) {
        alert('Primero ejecuta el código para generar el AST');
        return;
    }
    
    if (!reportesActuales.astJSON) {
        alert(' No hay AST para descargar');
        return;
    }
    
    try {
        const json = atob(reportesActuales.astJSON);
        const blob = new Blob([json], {type: 'application/json'});
        const a = document.createElement('a');
        a.href = URL.createObjectURL(blob);
        a.download = 'ast.json';
        a.click();
        console.log('AST descargado');
    } catch(e) {
        alert('Error al descargar: ' + e.message);
        console.error('Error:', e);
    }
}

// Inicialización
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM cargado, inicializando...');
    
    const editor = document.getElementById('editor');
    
    if (editor) {
        // Actualizar números de línea al escribir
        editor.addEventListener('input', actualizarLineasEditor);
        
        // Inicializar números de línea
        actualizarLineasEditor();
        sincronizarScrolls();
    }
    
    // Verificar que los botones existen
    const btnResultado = document.getElementById('btnResultado');
    const btnErrores = document.getElementById('btnErrores');
    const btnSimbolos = document.getElementById('btnSimbolos');
    const btnAST = document.getElementById('btnAST');
    
    console.log('Botones encontrados:', {
        btnResultado: !!btnResultado,
        btnErrores: !!btnErrores,
        btnSimbolos: !!btnSimbolos,
        btnAST: !!btnAST
    });
    
    // Inicialmente deshabilitados
    habilitarBotonesDescarga(false);
});