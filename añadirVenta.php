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
    <link rel='stylesheet' href='css/añadirventas.css'>
    <script src='js/index.js'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap"
        rel="stylesheet">
</head>

<body>
<nav>
        <a href="index.php"><img src="images/logo.jpeg" alt="logo"></a>
        <ul>
            <li><a href="inicio.php">INICIO</a></li>
            <li><a href="ventas.php">VENTAS</a></li>
            <li><a href="personal.php">PERSONAL</a></li>
            <li><a href="dashboard.php">DASHBOARD</a></li>
            <li><a href="inventario.php">INVENTARIO</a></li>
        </ul>
    </nav>


    <div class="contenedor-registro">

    <div class="contenedor-izq">
        <h1>
            <i class="titulo-izq"></i>
            HELADERIA SPLENDID
        </h1>
        <div class="splendid">
            <img src="images/ventasA.jpg" alt="splendid">
        </div>

    </div>

    <div class="contenedor-form">
    <form action="insertarVentas.php" class="form-ventas" method="post" enctype="multipart/form-data">
    <h1 class="form-titulo">REGISTRO VENTAS</h1>        
        <div class="cont-prod">
            <label for="cont-prod" class="form-label">PRODUCTOS:</label>
            <div class="opcion-dropdown">
            <?php
            include 'bdd.php';
            // Consulta para obtener los registros de productos desde la base de datos
            $result = mysqli_query($conexion, "SELECT id, nombre, precio FROM productos");
            
            // Verificar si se encontraron registros
            if (mysqli_num_rows($result) > 0) {
                // Crear el botón desplegable y su lista de opciones
                echo '<select name="producto" id="mySelect" onchange="calcularPrecio()" required>';
                
                echo '<option value="">Seleccionar opción</option>';

                // Iterar sobre los registros y generar las opciones
                while ($fila = mysqli_fetch_assoc($result)) {
                    $id = $fila['id'];
                    $nombre = $fila['nombre'];
                    $precio = $fila['precio'];
                    echo '<option value="'. $id .'" data-precio="'. $precio .'">'.$nombre.'</option>';
                }

                // Cerrar el botón desplegable y su lista de opciones
                echo '</select>';

            } else {
                echo 'No se encontraron registros.';
            }
            // Cerrar conexión a la base de datos
            mysqli_close($conexion);
            ?>
                
            </div>
        </div>

        <div class="cont-fecha">
            <label for="Fecha" class="form-label">FECHA: </label>
            <input id="cont-fecha" type="text" class="form_input" name="Fecha" pattern="\d{4}-\d{2}-\d{2}" placeholder="aaaa-mm-dd" required>
        </div>
        <div class="cont-cantidad">
            <label for="Cantidad" class="form-label">CANTIDAD: </label>
            <input id="cant" type="number" class="form_input" name="Cantidad" placeholder="Cantidad" onchange="calcularPrecio()" required>
        </div>
        <div class="cont-total">
            <label for="Total" class="form-label">TOTAL:</label>
            <input id="prec" type="text" class="form_input" name="Total" placeholder="Total [Bs]" readonly>
        </div>
        <div class="cont-sucursal">
        <label for="suc1" class="form-label">SUCURSAL:</label>
            <div class="radio-container">
                <input id="suc1" name="sucursal" type="radio" value="1" checked required>
                <label for="suc1">SAN PEDRO</label>
                <input id="suc2" name="sucursal" type="radio" value="2" required>
                <label for="suc2">ZONA SUR</label>
            </div>
        </div>

        <div class="set">
            <button type="submit" class="form_submit">ENVIAR</button>
        </div>
    </form>

    </div>

    </div>

    <a href="ventas.php" class="btVolver">
            <button class="boton-av" type="submit">
                Volver Venta
            </button></a>

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

    <script>
        function calcularPrecio() {
            var selectElement = document.getElementById('mySelect');
            var option = selectElement.options[selectElement.selectedIndex];
            var productoId = selectElement.value;
            var productoNombre = option.text;
            var precio = option.dataset.precio;

            var cantidadElement = document.getElementById('cant');
            var cantidad = parseInt(cantidadElement.value);

            var totalElement = document.getElementById('prec');
            var total = 0;
            
            if (precio) {
                total = (precio * cantidad).toFixed(2); // Redondear a 2 decimales
                console.log('Precio obtenido: ' + precio);
            } else {
                console.log('No se encontró el precio del producto seleccionado');
            }
            totalElement.value = total;
}


    </script>
    
    

</body>

</html>