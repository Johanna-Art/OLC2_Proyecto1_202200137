function ejecutar() {
    const code = document.getElementById('editor').value;
    const output = document.getElementById('output');
    
    output.textContent = 'Procesando...';
    
    fetch('../backend/index.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({code: code, action: 'execute'})
    })
    .then(res => res.json())
    .then(data => {
        if(data.success) {
            output.textContent = data.output || ' Sin salida';
            if(data.errors && data.errors.length > 0) {
                output.textContent += '\n\n Advertencias:\n' + 
                    data.errors.map(e => 'Línea ' + e.line + ': ' + e.description).join('\n');
            }
        } else {
            output.textContent = 'Error: ' + (data.error || 'Error desconocido');
        }
    })
    .catch(err => {
        output.textContent = 'Error de conexión: ' + err.message;
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
    input.onchange = function(e) {
        const file = e.target.files[0];
        const reader = new FileReader();
        reader.onload = function(ev) {
            document.getElementById('editor').value = ev.target.result;
        };
        reader.readAsText(file);
    };
    input.click();
}

function descargarErrores() {
    alert('Generando reporte de errores...');
}

function descargarSimbolos() {
    alert('Generando tabla de símbolos...');
}
