<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Inventario</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/inventario.css'>
    <script src='js/inventario.js'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include("bdd.php");
        $sql="SELECT a.id, b.nombre, a.cantidad, a.fecha_actualizacion
        FROM inventario a, helados b
        WHERE a.id_helado = b.id"; // aqui va el query o consulta
        $resultado=mysqli_query($conexion, $sql); // se almacenan los resultados entregados por el query en $resultado
    ?>
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
    <div class="contenedor">
        <h1>INVENTARIO DE HELADO</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CANTIDAD</th>
                    <th>FECHA ACTUALIZACION</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($fila=mysqli_fetch_array($resultado)){ // recorriendo cada fila del resultado
                ?>
                <tr>
                    <td> <?php echo $fila["id"] ?> </td>
                    <td> <?php echo $fila["nombre"] ?> </td>
                    <td> <?php echo $fila["cantidad"] ?> </td>
                    <td> <?php echo $fila["fecha_actualizacion"] ?> </td>
                    <td>
                        <?php echo "<a href=''>EDITAR</a>"; ?>
                        -
                        <?php echo "<a href=''>ELIMINAR</a>"; ?>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <?php
            mysqli_free_result($resultado);
            mysqli_close($conexion);
        ?>

        <h1>INVENTARIO DE INGREDIENTES</h1>
    </div>
    <footer>
        <p>2023 por: Universidad Católica Boliviana "San Pablo"</p>
    </footer>
</body>
</html>