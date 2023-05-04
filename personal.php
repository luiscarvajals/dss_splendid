<?php
include 'bdd.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ventas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='css/personal.css'>
    <script src='js/index.js'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <a href="index.php"><img src="images/logo.jpeg" alt="logo"></a>
        <ul>
            <li><a href="index.php">INICIO</a></li>
            <li><a href="ventas.php">VENTAS</a></li>
            <li><a href="personal.php">PERSONAL</a></li>
            <li><a href="#">INVENTARIO</a></li>
            <li><a href="#">SALIR</a></li>
        </ul>
    </nav>
    <table>
    <thead>
        <tr>
            <th>NOMBRE</th>
            <th>ROL</th>
            <th>HORARIO</th>
            <th>RENDIMIENTO</th>
            <th>SUCURSAL</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $empleados = mysqli_query($conexion, "SELECT a.nombre, a.direccion, a.horario, a.telefono, c.nombre 
        FROM empleados a, sucursales c 
        WHERE a.sucursales_id_sucursal = c.id_sucursal");
        while($row=mysqli_fetch_assoc($empleados)){?>
        <tr>
            <td><?php echo $row["nombre"];?></td>
            <td><?php echo $row["direccion"];?></td>
            <td><?php echo $row["horario"];?></td>
            <td><?php echo $row["telefono"];?></td>
            <td><?php echo $row["nombre"];?></td>
        </tr>
        <?php } mysqli_free_result($empleados); ?>
    </tbody>
</table>

    <footer>
        <p>2023 por: Universidad Católica Boliviana "San Pablo"</p>
    </footer>
</body>
</html>