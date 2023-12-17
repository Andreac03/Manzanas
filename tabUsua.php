<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        
    }

    th, td {
        border: 1px solid #976464;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #d1b7b7;
    }

    form {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    input {
        flex-grow: 1;
        margin-right: 8px;
    }

    button {
        background-color: rosybrown;
        color: white;
        border: none;
        padding: 8px;
        cursor: pointer;
    }
</style>
</head>
<body>
<h2>Beneficiario</h2> 

<table id="miTabla1">
    <thead>
        <tr>
           
            <th>Cod Beneficiario</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Tipo de Documento</th>
            <th>Documento</th>
            <th>Direccion</th>
            <th>Localidad</th>
            <th>Telefono</th>
            <th>E_meil</th>
            <th>Ocupación</th>
            <th>Servicios</th>
            
        </tr>
       
    </thead>
    <tbody id="tabla2">
        <tbody>
            
            </tbody>
    </tbody>
</table>

<script>
    function agregarFila() {
        // Obtener referencia a la tabla y al cuerpo de la tabla
        var tabla = document.getElementById("Tabla1");
        var tabla = document.getElementById("tabla2");

        // Crear una nueva fila y celdas
        var fila = tabla.insertRow();
        var celdaCodB = fila.insertCell(0);
        var celdaNombre= fila.insertCell(1);
        var celdaApellido= fila.insertCell(2);
        var celdaTipoDocumento= fila.insertCell(3);
        var celdaNDocumento= fila.insertCell(4);
        var celdaDireccion= fila.insertCell(5);
        var celdaLocalidad= fila.insertCell(6);
        var celdaTelefono= fila.insertCell(7);
        var celdaE_mail= fila.insertCell(8);
        var celdaOcupacion= fila.insertCell(9);
        var celdaServicios= fila.insertCell(10);
       
      
       

        // Crear un formulario dentro de la celda de acciones
        var formulario = document.createElement("form");
        formulario.onsubmit = function(event) {
            event.preventDefault(); // Evitar el envío del formulario para mantener la tabla estática
        };

        

        // Agregar campos de entrada al formulario
            celdaCodB.textContent = inputCodB.value;
            celdaNombre.textContent = inputNombre.value;
            celdaApellido.textContent = inputApellido.value;
            celdaTipoDocumento.textContent = inputTiDocumento.value;
            celdaNDocumento.textContent = inputNDocumento.value;
            celdaDireccion.textContent = inputDireccion.value;
            celdaLocalidad.textContent = inputLocalidad.value;
            celdaTelefono.textContent = inputTelefono.value;
            celdaE_mail.textContent = inputE_mail.value;
            celdaOcuoacion.textContent = inputOcupacion.value;
            celdaServicios.textContent = inputServicios.value;
            inputCodB.value = ""; // Limpiar el campo de nombre después de guardar
            inputNombre.value = ""; // Limpiar el campo de edad después de guardar
            inputApellido.value = "";
            inputTiDocumento.value = "";
            inputNDocumento.value = "";
            inputDireccion.value = "";
            inputLocalidad.value = "";
            inputTelefono.value = "";
            inputE_mail.value = "";
            inputOcupacion.value = "";
            inputServicios.value = "";
            
    

        // Agregar elementos al formulario
        formulario.appendChild(inputCodB);
        formulario.appendChild(inputNombre);
        formulario.appendChild(inputApellido);
        formulario.appendChild(inputTiDocumento);
        formulario.appendChild(inputNDocumento);
        formulario.appendChild(inputDireccion);
        formulario.appendChild(inputLocalidad);
        formulario.appendChild(inputTelefono);
        formulario.appendChild(inputE_mail);
        formulario.appendChild(inputOcupacion);
        formulario.appendChild(inputServicios);
        formulario.appendChild(botonGuardar);
        celdaAcciones.appendChild(botonBorrar);
    }
</script>

<button onclick="agregarFila()">Agregar Fila</button>

<button onclick="Guardar()">Guardar</button>

<button onclick="Borrar()">Borrar</button>

</body>
</html> 