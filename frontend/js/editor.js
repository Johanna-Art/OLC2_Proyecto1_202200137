window.reportesActuales = null;

function ejecutar() {
    const code = document.getElementById('editor').value;
    const output = document.getElementById('output');
    
    output.textContent = ' Ejecutando...';
    const url = window.location.origin + '/backend/index.php';
    
    fetch(url, {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({codigo: code, accion: 'ejecutar'})
    })
    .then(res => res.text())  //Leer como texto PRIMERO
    .then(text => {
        console.log('Respuesta backend:', text);
        try {
            const data = JSON.parse(text);
            
            if (data.exito) {
                output.textContent = data.salida || ' Sin salida';
                if (data.errores?.length) {
                    output.textContent += '\n' + data.errores.map(e => e.descripcion).join('; ');
                }
                window.reportesActuales = data.reportes;
            } else {
                output.textContent = ' ' + (data.error || 'Error');
            }
        } catch (e) {
            
            output.textContent = 'espuesta inválida:\n' + text.substring(0, 200);
            console.error('No es JSON:', text);
        }
    })
    .catch(err => {
        output.textContent = 'Error: ' + err.message;
        console.error('Fetch error:', err);
    });
}

function nuevo() {
    document.getElementById('editor').value = '';
    document.getElementById('output').textContent = '';
}

function limpiarConsola() {
    document.getElementById('output').textContent = '';
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
    input.onchange = e => {
        const file = e.target.files[0];
        const reader = new FileReader();
        reader.onload = ev => document.getElementById('editor').value = ev.target.result;
        reader.readAsText(file);
    };
    input.click();
}

function descargarErrores() {
    if (!window.reportesActuales?.erroresCSV) { alert('Ejecuta primero'); return; }
    const blob = new Blob([atob(window.reportesActuales.erroresCSV)], {type: 'text/csv'});
    const a = document.createElement('a');
    a.href = URL.createObjectURL(blob);
    a.download = 'errores.csv';
    a.click();
}

function descargarSimbolos() {
    if (!window.reportesActuales?.simbolosCSV) { alert('Ejecuta primero'); return; }
    const blob = new Blob([atob(window.reportesActuales.simbolosCSV)], {type: 'text/csv'});
    const a = document.createElement('a');
    a.href = URL.createObjectURL(blob);
    a.download = 'simbolos.csv';
    a.click();
}
