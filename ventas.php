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
        <a href="inicio.php"><img src="images/logo.jpeg" alt="logo"></a>
        <ul>
            <li><a href="inicio.php">INICIO</a></li>
            <li><a href="ventas.php">VENTAS</a></li>
            <li><a href="personal.php">PERSONAL</a></li>
<<<<<<< HEAD
            <li><a href="dashboard.php">DASHBOARD</a></li>
=======
>>>>>>> f6b77882942a708c014b0d7e4d51f5be3e80a563
            <li><a href="inventario.php">INVENTARIO</a></li>
            <li><a href="#">SALIR</a></li>
        </ul>
    </nav>

    <div class="opcion-dropdown">
    <select onchange="cambiarTabla(this.value)">
            <option  value="">Seleccionar opción</option>
<<<<<<< HEAD
            <option  value="ventas_totales">VENTAS TOTALES</option>
            <option  value="ventas_sucursalSP">VENTAS SUCURSAL SAN PEDRO</option>
            <option  value="ventas_sucursalZS">VENTAS SUCURSAL ZONA SUR</option>
            <option  value="helados_mas_vendidos">HELADOS MAS VENDIDOS</option>
            <option  value="helados_mas_vendidosSP">HELADOS MAS VENDIDOS - SAN PEDRO</option>
            <option  value="helados_mas_vendidosZS">HELADOS MAS VENDIDOS - ZONA SUR</option>
    </select>
    </div>

=======
            <option  value="ventas_totales">Ventas totales</option>
            <option  value="ventas_sucursal1">Ventas por sucursal 1</option>
            <option  value="ventas_sucursal2">Ventas por sucursal 2</option>
            <option  value="helados_mas_vendidos">Helados más vendidos</option>
    </select>
    </div>

    <div class="contenedor-datos"></div>

>>>>>>> f6b77882942a708c014b0d7e4d51f5be3e80a563
    <a href="añadirVenta.php" class="btVolver">
            <button class="boton-av" type="submit">
                Añadir Venta
            </button></a>

<<<<<<< HEAD
    <div class="contenedor-datos">
    <div class="card" id="card-helados-vendidos">

        <h2 class="titulo1"></h2>

        <div class="contenedor-grupo">
        <div class="grupo">
            <h1 style = "padding-right: 15px;">MAS VENDIDO:</h1> <p id="primer-valor"></p>
        </div>
        <div class="grupo">
            <h1 style = "padding-right: 15px;">CANTIDAD TOTAL:</h1><p id="segundo-valor"></p>
        </div>
        <div class="grupo">
            <h1 style = "padding-right: 15px;">MONTO TOTAL:</h1><p id="tercer-valor"></p>
        </div>
        </div>

    </div>

    <div class="contenedor-tabla">
    <!-- Tabla generada -->
    </div>
    </div>
    
    <script>
        function cambiarTabla(opcion) {
            var contenedorTabla = document.querySelector('.contenedor-tabla');
            var contenedorCard = document.querySelector('#card-helados-vendidos');
            var primerValorElement = document.querySelector('#primer-valor');
            var segundoValorElement = document.querySelector('#segundo-valor');
            var tercerValorElement = document.querySelector('#tercer-valor');

            var seleccionHeladosMasVendidos = false;

            var tituloTarjeta1 = document.querySelector('.card .titulo1');
            var tituloTarjeta2 = document.querySelector('.card .titulo2');

            // Limpiar contenido actual de la tabla y la tarjeta
            contenedorTabla.innerHTML = '';
            primerValorElement.textContent = '';
            segundoValorElement.textContent = '';
            tercerValorElement.textContent = '';
=======
    <script>
        function cambiarTabla(opcion) {
            var contenedorTabla = document.querySelector('.contenedor-datos');

            // Limpiar contenido actual de la tabla
            contenedorTabla.innerHTML = '';
>>>>>>> f6b77882942a708c014b0d7e4d51f5be3e80a563

            // Verificar la opción seleccionada y agregar el contenido correspondiente a la tabla
            switch (opcion) {
                case 'ventas_totales':
<<<<<<< HEAD
                    seleccionHeladosMasVendidos = false;
                    if (seleccionHeladosMasVendidos) {
                        contenedorCard.style.display = 'block';
                    } else {
                        contenedorCard.style.display = 'none';
                    }
                    contenedorTabla.innerHTML = `
                    <div class="contenedor-tabla1">
                        <div class="tabla-titulo1">VENTAS TOTALES (TODAS LAS SUCURSALES)</div>
=======
                    contenedorTabla.innerHTML = `
                    <div class="contenedor-tabla1">
                        <div class="tabla-titulo1">VENTAS</div>
>>>>>>> f6b77882942a708c014b0d7e4d51f5be3e80a563
                        <div class="tabla-tv">FECHA DE VENTA</div>
                        <div class="tabla-tv">CANTIDAD</div>
                        <div class="tabla-tv">PRODUCTO</div>
                        <div class="tabla-tv">SUCURSAL</div>
<<<<<<< HEAD
                        <div class="tabla-tv">TOTAL [BS]</div>
=======
                        <div class="tabla-tv">TOTAL</div>
>>>>>>> f6b77882942a708c014b0d7e4d51f5be3e80a563
                        
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
                    
<<<<<<< HEAD
                    case 'ventas_sucursalSP':
                        seleccionHeladosMasVendidos = false;
                        if (seleccionHeladosMasVendidos) {
                            contenedorCard.style.display = 'block';
                        } else {
                            contenedorCard.style.display = 'none';
                        }
                        contenedorTabla.innerHTML = `
                        <div class="contenedor-tabla2">
                            <div class="tabla-titulo2">VENTAS - SUCURSAL SAN PEDRO </div>
                            <div class="tabla-tv">FECHA DE VENTA</div>
                            <div class="tabla-tv">CANTIDAD</div>
                            <div class="tabla-tv">PRODUCTO</div>
                            <div class="tabla-tv">TOTAL [BS]</div>
=======
                    case 'ventas_sucursal1':
                        contenedorTabla.innerHTML = `
                        <div class="contenedor-tabla2">
                            <div class="tabla-titulo2">VENTAS</div>
                            <div class="tabla-tv">FECHA DE VENTA</div>
                            <div class="tabla-tv">CANTIDAD</div>
                            <div class="tabla-tv">PRODUCTO</div>
                            <div class="tabla-tv">TOTAL</div>
>>>>>>> f6b77882942a708c014b0d7e4d51f5be3e80a563
                            
                            <?php 
                            $ventas = mysqli_query($conexion, "SELECT a.fecha_venta, a.cantidad, b.nombre, a.total 
                                FROM ventas a 
                                JOIN productos b ON b.id = a.id_producto 
                                JOIN sucursales c ON c.id = a.id_sucursal 
<<<<<<< HEAD
                                WHERE c.nombre = 'San Pedro'");
=======
                                WHERE c.nombre = 'Sucursal 1'");
>>>>>>> f6b77882942a708c014b0d7e4d51f5be3e80a563
                            
                            while($row=mysqli_fetch_assoc($ventas)){?>
                            <div class="tabla-itemv"><?php echo $row["fecha_venta"];?></div>
                            <div class="tabla-itemv"><?php echo $row["cantidad"];?></div>
                            <div class="tabla-itemv"><?php echo $row["nombre"];?></div>
                            <div class="tabla-itemv"><?php echo $row["total"];?></div>
                            <?php } mysqli_free_result($ventas); ?>
                        </div>
                            `;
                        break;
                    
<<<<<<< HEAD
                    case 'ventas_sucursalZS':
                        seleccionHeladosMasVendidos = false;
                        if (seleccionHeladosMasVendidos) {
                            contenedorCard.style.display = 'block';
                        } else {
                            contenedorCard.style.display = 'none';
                        }
                        contenedorTabla.innerHTML = `
                        <div class="contenedor-tabla2">
                            <div class="tabla-titulo2">VENTAS - SUCURSAL ZONA SUR</div>
                            <div class="tabla-tv">FECHA DE VENTA</div>
                            <div class="tabla-tv">CANTIDAD</div>
                            <div class="tabla-tv">PRODUCTO</div>
                            <div class="tabla-tv">TOTAL [BS]</div>
=======
                    case 'ventas_sucursal2':
                        contenedorTabla.innerHTML = `
                        <div class="contenedor-tabla2">
                            <div class="tabla-titulo2">VENTAS</div>
                            <div class="tabla-tv">FECHA DE VENTA</div>
                            <div class="tabla-tv">CANTIDAD</div>
                            <div class="tabla-tv">PRODUCTO</div>
                            <div class="tabla-tv">TOTAL</div>
>>>>>>> f6b77882942a708c014b0d7e4d51f5be3e80a563
                            
                            <?php 
                            $ventas = mysqli_query($conexion, "SELECT a.fecha_venta, a.cantidad, b.nombre, a.total 
                                FROM ventas a 
                                JOIN productos b ON b.id = a.id_producto 
                                JOIN sucursales c ON c.id = a.id_sucursal 
<<<<<<< HEAD
                                WHERE c.nombre = 'Torre Ketal'");
=======
                                WHERE c.nombre = 'Sucursal 2'");
>>>>>>> f6b77882942a708c014b0d7e4d51f5be3e80a563
                            
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
<<<<<<< HEAD
                        $primerValor = '';
                        $segundoValor = '';
                        $tercerValor = '';


                        seleccionHeladosMasVendidos = true;
                        if (seleccionHeladosMasVendidos) {
                            tituloTarjeta1.textContent = 'TODAS LAS SUCURSALES';
                            contenedorCard.style.display = 'block';
                        } else {
                            contenedorCard.style.display = 'none';
                        }

                        contenedorTabla.innerHTML = `
                    <div class="contenedor-tabla3">
                        <div class="tabla-titulo3">HELADOS MAS VENDIDOS - (TODAS LAS SUCURSALES)</div>
                        <div class="tabla-tv">PRODUCTO</div>
                        <div class="tabla-tv">CANTIDAD</div>
                        <div class="tabla-tv">TOTAL [BS]</div>
                        
                        <?php 
                        $ventas = mysqli_query($conexion, "SELECT a.nombre, SUM(b.cantidad) AS cantidad_vendida, SUM(b.cantidad * a.precio) AS total_vendido
                        FROM ventas b JOIN productos a ON a.id = b.id_producto JOIN sucursales c ON c.id = b.id_sucursal
                        WHERE c.nombre IN ('San Pedro', 'Torre Ketal') GROUP BY a.nombre ORDER BY cantidad_vendida DESC");
                        
                        $firstRow = true; // Variable para controlar la primera fila

                        while($row = mysqli_fetch_assoc($ventas)){
                            if ($firstRow) {
                                // Obtener los valores de la primera fila
                                $primerValor = $row["nombre"];
                                $segundoValor = $row["cantidad_vendida"];
                                $tercerValor = $row["total_vendido"];
            
                                $firstRow = false; // Establecer a falso después de obtener la primera fila
                            }
                        ?>
                        <div class="tabla-itemv"><?php echo $row["nombre"];?></div>
                        <div class="tabla-itemv"><?php echo $row["cantidad_vendida"];?></div>
=======
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
>>>>>>> f6b77882942a708c014b0d7e4d51f5be3e80a563
                        <div class="tabla-itemv"><?php echo $row["total_vendido"];?></div>
                        <?php } mysqli_free_result($ventas); ?>
                    </div>
                        `;
<<<<<<< HEAD
                        // Actualizar los valores en la tarjeta
                        primerValorElement.textContent = "<?php echo $primerValor; ?>";
                        segundoValorElement.textContent = "<?php echo $segundoValor; ?>";
                        tercerValorElement.textContent = "<?php echo $tercerValor; ?>";
                        break;

                    case 'helados_mas_vendidosSP':
                        $primerValor = '';
                        $segundoValor = '';
                        $tercerValor = '';


                        seleccionHeladosMasVendidos = true;
                        if (seleccionHeladosMasVendidos) {
                            tituloTarjeta1.textContent = 'SUCURSAL SAN PEDRO';
                            contenedorCard.style.display = 'block';
                        } else {
                            contenedorCard.style.display = 'none';
                        }

                        contenedorTabla.innerHTML = `
                    <div class="contenedor-tabla3">
                        <div class="tabla-titulo3">HELADOS MAS VENDIDOS - SUCURSAL SAN PEDRO</div>
                        <div class="tabla-tv">PRODUCTO</div>
                        <div class="tabla-tv">CANTIDAD</div>
                        <div class="tabla-tv">TOTAL [BS]</div>
                        
                        <?php 
                        $ventas = mysqli_query($conexion, "SELECT a.nombre, SUM(b.cantidad) AS cantidad_vendida, SUM(b.cantidad * a.precio) AS total_vendido
                        FROM ventas b JOIN productos a ON a.id = b.id_producto JOIN sucursales c ON c.id = b.id_sucursal
                        WHERE c.nombre IN ('San Pedro') GROUP BY a.nombre ORDER BY cantidad_vendida DESC");
                        
                        $firstRow = true; // Variable para controlar la primera fila

                        while($row=mysqli_fetch_assoc($ventas)){
                            if ($firstRow) {
                                // Obtener los valores de la primera fila
                                $primerValor = $row["nombre"];
                                $segundoValor = $row["cantidad_vendida"];
                                $tercerValor = $row["total_vendido"];
            
                                $firstRow = false; // Establecer a falso después de obtener la primera fila
                            }
                        ?>
                        <div class="tabla-itemv"><?php echo $row["nombre"];?></div>
                        <div class="tabla-itemv"><?php echo $row["cantidad_vendida"];?></div>
                        <div class="tabla-itemv"><?php echo $row["total_vendido"];?></div>
                        <?php } mysqli_free_result($ventas); ?>
                    </div>
                        `;
                        // Actualizar los valores en la tarjeta
                        primerValorElement.textContent = "<?php echo $primerValor; ?>";
                        segundoValorElement.textContent = "<?php echo $segundoValor; ?>";
                        tercerValorElement.textContent = "<?php echo $tercerValor; ?>";
                        break;


                    case 'helados_mas_vendidosZS':

                        $primerValor = '';
                        $segundoValor = '';
                        $tercerValor = '';


                        seleccionHeladosMasVendidos = true;
                        if (seleccionHeladosMasVendidos) {
                            tituloTarjeta1.textContent = 'SUCURSAL ZONA SUR';
                            contenedorCard.style.display = 'block';
                        } else {
                            contenedorCard.style.display = 'none';
                        }

                        contenedorTabla.innerHTML = `
                    <div class="contenedor-tabla3">
                        <div class="tabla-titulo3">HELADOS MAS VENDIDOS - SUCURSAL ZONA SUR</div>
                        <div class="tabla-tv">PRODUCTO</div>
                        <div class="tabla-tv">CANTIDAD</div>
                        <div class="tabla-tv">TOTAL [BS]</div>
                        
                        <?php 
                        $ventas = mysqli_query($conexion, "SELECT a.nombre, SUM(b.cantidad) AS cantidad_vendida, SUM(b.cantidad * a.precio) AS total_vendido
                        FROM ventas b JOIN productos a ON a.id = b.id_producto JOIN sucursales c ON c.id = b.id_sucursal
                        WHERE c.nombre IN ('Torre Ketal') GROUP BY a.nombre ORDER BY cantidad_vendida DESC");
                        
                        $firstRow = true; // Variable para controlar la primera fila

                        while($row=mysqli_fetch_assoc($ventas)){
                            if ($firstRow) {
                                // Obtener los valores de la primera fila
                                $primerValor = $row["nombre"];
                                $segundoValor = $row["cantidad_vendida"];
                                $tercerValor = $row["total_vendido"];
            
                                $firstRow = false; // Establecer a falso después de obtener la primera fila
                            }
                        ?>
                        <div class="tabla-itemv"><?php echo $row["nombre"];?></div>
                        <div class="tabla-itemv"><?php echo $row["cantidad_vendida"];?></div>
                        <div class="tabla-itemv"><?php echo $row["total_vendido"];?></div>
                        <?php } mysqli_free_result($ventas); ?>
                    </div>
                        `;
                        // Actualizar los valores en la tarjeta
                        primerValorElement.textContent = "<?php echo $primerValor; ?>";
                        segundoValorElement.textContent = "<?php echo $segundoValor; ?>";
                        tercerValorElement.textContent = "<?php echo $tercerValor; ?>";
=======
>>>>>>> f6b77882942a708c014b0d7e4d51f5be3e80a563
                        break;
                }
            }
        </script>

<<<<<<< HEAD
<footer>
        <div class="footer-contenedor">
            <div class="footer-info">
                <div class="footer-contact">
                    <div class="infoimg">
                    <img src="images/whatsapp.png" alt="hero">
                    <p>TELEFONO: </p>
                    </div>

                    <p class="p1">271825944 </p>
                </div>

                <div class="footer-contact">
                    <div class="infoimg">
                    <img src="images/sucursal.png" alt="hero">
                    <p>SUCURSALES: </p>
                    </div>

                    <p class="p1">Zona San Pedro Calle, Nicolás Acosta N°420</p>
                    <p class="p1">Zona Sur, Calle 15 de Calacoto</p>
                </div>

                <div class="footer-contact">
                    <div class="infoimg">
                    <img src="images/facebook.png" alt="hero">
                    <p >FACEBOOK: </p>
                    </div>

                    <p class="p1">Helados Splendid La Paz Bolivia </p>
                </div>
            </div>
            <div class="info">
                <p>2023 por: Universidad Católica Boliviana "San Pablo"</p>
            </div>
            
        </div>
    </footer>
=======
<footer>    </footer>
>>>>>>> f6b77882942a708c014b0d7e4d51f5be3e80a563
</body>
</html>