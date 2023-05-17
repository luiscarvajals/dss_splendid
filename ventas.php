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
            <li><a href="inventario.php">INVENTARIO</a></li>
            <li><a href="#">SALIR</a></li>
        </ul>
    </nav>

    <div class="opcion-dropdown">
    <select onchange="cambiarTabla(this.value)">
            <option  value="">Seleccionar opción</option>
            <option  value="ventas_totales">Ventas totales</option>
            <option  value="ventas_sucursal1">Ventas por sucursal 1</option>
            <option  value="ventas_sucursal2">Ventas por sucursal 2</option>
            <option  value="helados_mas_vendidos">Helados más vendidos</option>
    </select>
    </div>

    <div class="contenedor-datos"></div>

    <a href="añadirVenta.php" class="btVolver">
            <button class="boton-av" type="submit">
                Añadir Venta
            </button></a>

    <script>
        function cambiarTabla(opcion) {
            var contenedorTabla = document.querySelector('.contenedor-datos');

            // Limpiar contenido actual de la tabla
            contenedorTabla.innerHTML = '';

            // Verificar la opción seleccionada y agregar el contenido correspondiente a la tabla
            switch (opcion) {
                case 'ventas_totales':
                    contenedorTabla.innerHTML = `
                    <div class="contenedor-tabla1">
                        <div class="tabla-titulo1">VENTAS</div>
                        <div class="tabla-tv">FECHA DE VENTA</div>
                        <div class="tabla-tv">CANTIDAD</div>
                        <div class="tabla-tv">PRODUCTO</div>
                        <div class="tabla-tv">SUCURSAL</div>
                        <div class="tabla-tv">TOTAL</div>
                        
                        <?php 
                        $ventas = mysqli_query($conexion, "select a.fecha_venta, a.cantidad, b.nombre AS nombre_producto, c.nombre AS nombre_sucursal, a.total 
                        from ventas a, productos b, sucursales c 
                        where c.id = a.id_sucursal 
                        and b.id = a.id_producto");
                        
                        while($row =mysqli_fetch_assoc($ventas)){?>
                            <div class="tabla-itemv"><?php echo $row["fecha_venta"];?></div>
                            <div class="tabla-itemv"><?php echo $row["cantidad"];?></div>
                            <div class="tabla-itemv"><?php echo $row["nombre_producto"];?></div>
                            <div class="tabla-itemv"><?php echo $row["nombre_sucursal"];?></div>
                            <div class="tabla-itemv"><?php echo $row["total"];?></div>
                            <?php } mysqli_free_result($ventas); ?>
                    </div>
                        `;
                        break;
                    
                    case 'ventas_sucursal1':
                        contenedorTabla.innerHTML = `
                        <div class="contenedor-tabla2">
                            <div class="tabla-titulo2">VENTAS</div>
                            <div class="tabla-tv">FECHA DE VENTA</div>
                            <div class="tabla-tv">CANTIDAD</div>
                            <div class="tabla-tv">PRODUCTO</div>
                            <div class="tabla-tv">TOTAL</div>
                            
                            <?php 
                            $ventas = mysqli_query($conexion, "SELECT a.fecha_venta, a.cantidad, b.nombre, a.total 
                                FROM ventas a 
                                JOIN productos b ON b.id = a.id_producto 
                                JOIN sucursales c ON c.id = a.id_sucursal 
                                WHERE c.nombre = 'Sucursal 1'");
                            
                            while($row=mysqli_fetch_assoc($ventas)){?>
                            <div class="tabla-itemv"><?php echo $row["fecha_venta"];?></div>
                            <div class="tabla-itemv"><?php echo $row["cantidad"];?></div>
                            <div class="tabla-itemv"><?php echo $row["nombre"];?></div>
                            <div class="tabla-itemv"><?php echo $row["total"];?></div>
                            <?php } mysqli_free_result($ventas); ?>
                        </div>
                            `;
                        break;
                    
                    case 'ventas_sucursal2':
                        contenedorTabla.innerHTML = `
                        <div class="contenedor-tabla2">
                            <div class="tabla-titulo2">VENTAS</div>
                            <div class="tabla-tv">FECHA DE VENTA</div>
                            <div class="tabla-tv">CANTIDAD</div>
                            <div class="tabla-tv">PRODUCTO</div>
                            <div class="tabla-tv">TOTAL</div>
                            
                            <?php 
                            $ventas = mysqli_query($conexion, "SELECT a.fecha_venta, a.cantidad, b.nombre, a.total 
                                FROM ventas a 
                                JOIN productos b ON b.id = a.id_producto 
                                JOIN sucursales c ON c.id = a.id_sucursal 
                                WHERE c.nombre = 'Sucursal 2'");
                            
                            while($row=mysqli_fetch_assoc($ventas)){?>
                            <div class="tabla-itemv"><?php echo $row["fecha_venta"];?></div>
                            <div class="tabla-itemv"><?php echo $row["cantidad"];?></div>
                            <div class="tabla-itemv"><?php echo $row["nombre"];?></div>
                            <div class="tabla-itemv"><?php echo $row["total"];?></div>
                            <?php } mysqli_free_result($ventas); ?>
                        </div>
                        `;
                        break;

                    case 'helados_mas_vendidos':
                        contenedorTabla.innerHTML = `
                    <div class="contenedor-tabla3">
                        <div class="tabla-titulo3">VENTAS</div>
                        <div class="tabla-tv">PRODUCTO</div>
                        <div class="tabla-tv">TOTAL</div>
                        
                        <?php 
                        $ventas = mysqli_query($conexion, "SELECT a.nombre, SUM(b.cantidad) AS total_vendido
                        FROM ventas b JOIN productos a ON a.id = b.id_producto JOIN sucursales c ON c.id = b.id_sucursal
                        WHERE c.nombre IN ('Sucursal 1', 'Sucursal 2') GROUP BY a.nombre ORDER BY total_vendido DESC");
                        
                        while($row=mysqli_fetch_assoc($ventas)){?>
                        <div class="tabla-itemv"><?php echo $row["nombre"];?></div>
                        <div class="tabla-itemv"><?php echo $row["total_vendido"];?></div>
                        <?php } mysqli_free_result($ventas); ?>
                    </div>
                        `;
                        break;
                }
            }
        </script>

<footer>    </footer>
</body>
</html>