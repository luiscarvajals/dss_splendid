<?php
// Conexión con la base de datos

$conexion = mysqli_connect('localhost', 'root', '', 'tienda_helados');

$nombre = $_POST['nombre'];
$apellidoP = $_POST['apellidoP'];
$apellidoM = $_POST['apellidoM'];
$email = $_POST['email'];
$puesto = $_POST['puesto'];
$direccion = $_POST['direccion'];

// INSERT INTO 

$sql = "INSERT INTO empleados (nombre,apellidoP,apellidoM,email,puesto,direccion) 
    VALUES ('$nombre','$apellidoP','$apellidoM','$email','$puesto','$direccion')";

if (mysqli_query($conexion, $sql)) {
    echo 1; // En lugar de echo mysqli_query()
} else {
    echo 0;
}

?>