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
    <link rel='stylesheet' href='css/ventas.css'>
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
    <div class="contenedor-tabla">
        <div class="tabla-titulo">VENTAS</div>
        <div class="tabla-tv">CANTIDAD VENDIDA</div>
        <div class="tabla-tv">FECHA DE VENTA</div>
        <div class="tabla-tv">PRODUCTO</div>
        <div class="tabla-tv">SUCURSAL</div>
        
        <?php 
        $ventas = mysqli_query($conexion, "SELECT a.cantidad_vendida, a.fecha_venta, b.nombre_cliente, c.nombre 
        FROM ventas a, productos b, sucursales c 
        WHERE a.Productos_id_producto = b.id_producto
        AND a.Sucursales_id_sucursal = c.id_sucursal");
        while($row=mysqli_fetch_assoc($ventas)){?>
        <div class="tabla-itemv"><?php echo $row["cantidad_vendida"];?></div>
        <div class="tabla-itemv"><?php echo $row["fecha_venta"];?></div>
        <div class="tabla-itemv"><?php echo $row["nombre_cliente"];?></div>
        <div class="tabla-itemv"><?php echo $row["nombre"];?></div>
        <?php } mysqli_free_result($ventas); ?>
    </div>
    <footer>
        <p>2023 por: Universidad Católica Boliviana "San Pablo"</p>
    </footer>
</body>
</html>