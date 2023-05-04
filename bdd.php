<?php
    $server='localhost';
    $username='root';
    $password='';
    $database  ='splendid';
    
$conexion = new mysqli($server, $username, $password, $database);

if($conexion -> connect_errno) {
  die("Conexio fallida". $conexion -> connect_errno );
}else{
  echo "";
}


?>