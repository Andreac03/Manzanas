<?php

$conexion = new mysqli('localhost', 'root', '', 'manzanas');

// Verifica si hay errores en la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

echo "<br>";

$nombre_usuario =$_POST['nombre'];
$apellido_usuario =$_POST['apellido'];
$edad_usuario =$_POST['edad'];
$email_usuario =$_POST['email'];
$password_usuario =$_POST['password'];
$servicio_usuario =$_POST['servicio'];
$localidad_usuario =$_POST['localidad'];
$comentarios_usuario =$_POST['comentarios'];


//Setencia SQL

$query = "INSERT INTO registro (nombres,apellidos,edad,email,contraseña,servicio,localidad,comentarios)VALUES ('$nombre_usuario','$apellido_usuario','$edad_usuario','$email_usuario','$password_usuario','$servicio_usuario','$localidad_usuario','$comentarios_usuario')";

//Ejecución setencia SQL
$resultado = $conexion->query($query);

//Verificación de la ejecución
if(!$resultado){
  	echo "No se guardaron datos<br><a href='index.php'>Volver</a>".$query."<br>". mysqli_error($conexion);
     mysqli_close($conexion);
  }else{
  	echo "Datos Guardados correctamente<br><a href='index.php'>Volver</a>";
  	mysqli_close($conexion);
    
  }

 
?>