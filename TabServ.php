<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <nav class="smenu">
        <img class="logo" src="Img/logo_sf.png" width="250px">
            <ul>
                <li>
                <a href="index.php" class="menu">Inicio</a>
                </li>
            </ul>
</nav>
</header>
<main>
    <br><br>
    <center>
<h1>Servicios</h1> 
<table id="miTabla1">
    <thead>
        <tr>
           
            <th>Id Servicio</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th> Categoria de servicio</th>
            <th> Tipo de Servico</th>
            <th>Dia</th>
            <th>Hora</th>
            
        </tr>
       
    </thead>
    <tbody id="tabla2">

    </tbody>
</center>
</table>
</main>
<script>
    function agregarFila() {
      
        var tabla = document.getElementById("Tabla1");
        var tabla = document.getElementById("tabla2");


        var fila = tabla.insertRow();
        var celdaIdServicio= fila.insertCell(0);
        var celdaNombre= fila.insertCell(1);
        var celdaDescripcion= fila.insertCell(2);
        var celdaCategoriaServicio= fila.insertCell(3);
        var celdaTipoServicio= fila.insertCell(4);
        var celdaDia= fila.insertCell(5);
        var celdaHora= fila.insertCell(6);
        
        
       
      
       

        var formulario = document.createElement("form");
        formulario.onsubmit = function(event) {
            event.preventDefault(); 
        };

            celdaIdServicio.textContent = inputCodB.value;
            celdaNombre.textContent = inputNombre.value;
            celdaDescripcion.textContent = inputApellido.value;
            celdaCategoriaServicio.textContent = inputNDocumento.value;
            celdaTipoServicio.textContent = inputDireccion.value;
            celdaDia.textContent = inputTelefono.value;
            celdaHora.textContent = inputE_mail.value;
            inputIdServicio.value = ""; 
            inputNombre.value = "";
            inputDescripcion.value = "";
            inputCategoriaServicio.value = "";
            inputDia.value = "";
            inputHora.value = "";
            
            
    

       
        formulario.appendChild(inputIdServicio);
        formulario.appendChild(inputNombre);
        formulario.appendChild(inputDescripcion);
        formulario.appendChild(inputCategoriaServicio);
        formulario.appendChild(inputTipoServicio);
        formulario.appendChild(inputDia);
        formulario.appendChild(inputHora);
       

    }
</script>

<button onclick="agregarFila()">Agregar Fila</button>

<button onclick="Guardar()">Guardar</button>

<button onclick="Borrar()">Borrar</button>
<footer>
    <center>
    <img src="Img/logo_sf.png"><br>
    <h2>
        <a href="http://www,facebook.com" style="color: rgb(90, 47, 119)"><i class='bx bxl-facebook-circle'></i></a>
        <a href="http://www.twitter.com" style="color: rgb(90, 47, 119)"><i class='bx bxl-twitter' ></i></a>
        <a href="http://www.Instagram.com" style="color: rgb(90, 47, 119)"><i class='bx bxl-instagram-alt' ></i></a>
        <a href="http://www.tiktok.com" style="color: rgb(90, 47, 119)"><i class='bx bxl-tiktok' ></i></a>
    </h2>
</center>
</footer> 
</body>
</html>