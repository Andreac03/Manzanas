<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manzanas del Cuidado</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        <img src="Img/mujeres.jpg" width="100%">
    </header>
    <center>
        <br><br>
    <h1>Agendar cita</h1>
    <form action="/manzanas" method="post">

        <label for="servicio">Servicio:</label>
        <select id="servicio" name="servicio" required>
            <option value="salud">Salud</option>
            <option value="salud">Educación</option>
            <option value="Psicologia">Psicologia</option>
            <option value="lavanderia">Lavanderia</option>
            <option value="empleo">Empleo</option>
            <option value="asesoria juridica">Asesoria Juridica</option>
            <option value="deporte">Deporte</option>
        </select>

        <label for="date">Fecha</label>
        <input class="formulario" type="date" name="Fecha">

        <label for="Horario">Horario</label>
        <input  class="formulario" type="time" name="Horario">

        <label for="comentarios">Comentarios:</label>
        <textarea id="comentarios" name="comentarios" rows="10" cols="40" required></textarea>
        <br><br>
        <input type="submit" value="Enviar">
    </center>
    </form>
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
