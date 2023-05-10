<?php
include 'bdd.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Personal</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='css/personal.css'>
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
    <style>
    .tabla-empleados {
        font-family: Arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
    }

    .tabla-empleados th, .tabla-empleados td {
        text-align: left;
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }

    .tabla-empleados th {
        background-color: #4CAF50;
        color: white;
    }

    .tabla-empleados tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
    <table class ="tabla-empleados">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>DIRECCION</th>
                <!-- <th>ROL</th> -->
                <th>HORARIO</th>
                <!-- <th>RENDIMIENTO</th> -->
                <th>TELEFONO</th>
                <th>SUCURSAL</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $empleados = mysqli_query($conexion, "SELECT a.nombreE, a.direccion, a.horario, a.telefono, c.nombre 
            FROM empleados a, sucursales c 
            WHERE a.sucursales_id_sucursal = c.id_sucursal");
            while($row=mysqli_fetch_assoc($empleados)){?>
            <tr>
                <td><?php echo $row["nombreE"];?></td>
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
