<?php

$conexion = new mysqli('localhost', 'root', '', 'manzanas2');

// Verifica si hay errores en la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

echo "<br>";
$nombre_usuario =$_POST['nombre'];
$apellido_usuario =$_POST['apellido'];
$tipo_documento=$_POST['documento'];
$documento=$_POST['Nodocumento'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$ciudad=$_POST['ciudad'];
$direccion=$_POST['direccion'];
$ocupacion=$_POST['ocupacion'];




//Setencia SQL

$query = "INSERT INTO Beneficiarios (Tipo_Documento,
        Numero_Documento,
        Nombres,
        Apellidos,
        Telefono,
        E_meil,
        Ciudad,
        Direccion,
        Ocupacion)VALUES ('$tipo_documento','$documento','$nombre_usuario','$apellido_usuario','$telefono','$email','$ciudad','$direccion','$ocupacion')";

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