<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda_helados";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

$sql = "SELECT * FROM empleados";
$result = $conn->query($sql);

$empleados = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $empleados[] = $row;
    }
}

$conn->close();
?>


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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include("bdd.php");
        $sql=
        "SELECT p.nombre_helado, SUM(e.cantidad) AS total_cantidad
        FROM productos p, sucursales s, productos_sucursales e
        WHERE e.productos_id_productos = p.id_productos
        AND e.sucursales_id_sucursal = s.id_sucursal
        GROUP BY p.nombre_helado";// aqui va el query o consulta
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
                    <th>HELADO</th>
                    <!-- <th>SUCURSAL</th> -->
                    <th>CANTIDAD</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($fila=mysqli_fetch_array($resultado)){ // recorriendo cada fila del resultado
                ?>
                <tr>
                    <td> <?php echo $fila["nombre_helado"] ?> </td>
                    <!-- <td> <?php echo $fila["nombre"] ?> </td> -->
                    <td> <?php echo $fila["total_cantidad"] ?> </td>
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

        <!-- Gráfico de productos por sucursal -->
        <h2>Productos por Sucursal</h2>
        <div class="chart-container">
            <canvas id="productosBySucursalChart" width="400" height="200"></canvas>
        </div>
        <?php
        // Conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tienda_helados";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        $sql = "SELECT s.nombre AS sucursal, SUM(ps.cantidad) AS total_cantidad
                FROM sucursales s
                INNER JOIN productos_sucursales ps ON s.id_sucursal = ps.sucursales_id_sucursal
                GROUP BY s.nombre";

        $result = $conn->query($sql);

        // Crear un array con los datos de productos por sucursal
        $labels = [];
        $data = [];

        while ($row = $result->fetch_assoc()) {
            $labels[] = $row["sucursal"];
            $data[] = $row["total_cantidad"];
        }

        $conn->close();
        ?>
        <script>
    // Obtener el contexto del lienzo del gráfico
    var ctx = document.getElementById('productosBySucursalChart').getContext('2d');

    // Datos del gráfico de productos por sucursal
    var productosBySucursalData = {
        labels: <?php echo json_encode($labels); ?>,
        datasets: [{
            data: <?php echo json_encode($data); ?>,
            backgroundColor: [
                '#FF6384',
                '#36A2EB',
                '#FFCE56',
                '#4BC0C0',
                '#9966FF'
            ],
            hoverBackgroundColor: [
                '#FF6384',
                '#36A2EB',
                '#FFCE56',
                '#4BC0C0',
                '#9966FF'
            ]
        }]
    };

    // Configuración del gráfico
    var chartOptions = {
        responsive: true,
        tooltips: {
            callbacks: {
                label: function(tooltipItem, data) {
                    var dataset = data.datasets[tooltipItem.datasetIndex];
                    var total = dataset.data.reduce(function(previousValue, currentValue) {
                        return previousValue + currentValue;
                    });
                    var currentValue = dataset.data[tooltipItem.index];
                    var percentage = Math.floor((currentValue / total) * 100 + 0.5);
                    return percentage + "%";
                }
            }
        }
    };

    // Crear el gráfico de productos por sucursal
    var productosChart = new Chart(ctx, {
        type: 'pie',
        data: productosBySucursalData,
        options: chartOptions
    });
</script>


    </div>
    <footer>
        <p>2023 por: Universidad Católica Boliviana "San Pablo"</p>
    </footer>
</body>
</html>