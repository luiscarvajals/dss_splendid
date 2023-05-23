<?php
// Conexión con la base de datos

$conexion = mysqli_connect('localhost', 'root', '', 'splendid');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$sueldo = $_POST['sueldo'];
$fecha_contratacion = $_POST['fecha_contratacion'];


// INSERT INTO query

$sql = "INSERT INTO empleados (nombre,apellido,fecha_nacimiento,direccion,telefono,email,cargo,sueldo,fecha_contratacion)) 
    VALUES ('$nombre','$apellido','$fecha_nacimiento','$direccion','$telefono','$email','$cargo','$sueldo','$fecha_contratacion')";

echo mysqli_query($conexion, $sql);	

?>