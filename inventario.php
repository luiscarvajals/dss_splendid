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
    <style>
        .chart-container {
            /* display: inline-block; */
            margin-bottom: 45px;
        }
    </style>
</head>
<body>
    <?php
        include("bdd.php");
        $sql=
        "SELECT p.nombre AS helado, SUM(ip.cantidad) AS total_cantidad
        FROM productos p, sucursales s, inventario_productos ip
        WHERE ip.id_producto = p.id
        AND ip.id_sucursal = s.id
        GROUP BY p.nombre";// aqui va el query o consulta
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
                    <td> <?php echo $fila["helado"] ?> </td>
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
        $dbname = "splendid";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        $sql = "SELECT s.nombre AS sucursal, SUM(ip.cantidad) AS total_cantidad
                FROM sucursales s
                INNER JOIN inventario_productos ip ON s.id = ip.id_sucursal
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

        <!-- Gráfico de productos por sucursal (1ra sucursal) -->
        <div class="chart-container">
            <h2>Productos por Sucursal (1ra Sucursal)</h2>
            <canvas id="productosBySucursal1Chart" width="400" height="200"></canvas>
        </div>

        <!-- Gráfico de productos por sucursal (2da sucursal) -->
        <div class="chart-container">
            <h2>Productos por Sucursal (2da Sucursal)</h2>
            <canvas id="productosBySucursal2Chart" width="400" height="200"></canvas>
        </div>

        <?php
        // Conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "splendid";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        $sql1 = "SELECT p.nombre AS producto, ip.cantidad AS cantidad
                FROM productos p
                INNER JOIN inventario_productos ip ON p.id = ip.id_producto
                WHERE ip.id_sucursal = 1";

        $result1 = $conn->query($sql1);

        // Crear un array con los datos de productos por sucursal (1ra sucursal)
        $labels1 = [];
        $data1 = [];

        while ($row1 = $result1->fetch_assoc()) {
            $labels1[] = $row1["producto"];
            $data1[] = $row1["cantidad"];
        }

        $sql2 = "SELECT p.nombre AS producto, ip.cantidad AS cantidad
                FROM productos p
                INNER JOIN inventario_productos ip ON p.id = ip.id_producto
                WHERE ip.id_sucursal = 2";

        $result2 = $conn->query($sql2);

        // Crear un array con los datos de productos por sucursal (2da sucursal)
        $labels2 = [];
        $data2 = [];

        while ($row2 = $result2->fetch_assoc()) {
            $labels2[] = $row2["producto"];
            $data2[] = $row2["cantidad"];
        }

        $conn->close();
        ?>
        <script>
            // Obtener el contexto del lienzo del gráfico
            var ctx1 = document.getElementById('productosBySucursal1Chart').getContext('2d');
            var ctx2 = document.getElementById('productosBySucursal2Chart').getContext('2d');

            // Datos del gráfico de productos por sucursal (1ra sucursal)
            var productosBySucursal1Data = {
                labels: <?php echo json_encode($labels1); ?>,
                datasets: [{
                    label: 'Cantidad de productos',
                    data: <?php echo json_encode($data1); ?>,
                    backgroundColor: '#FF6384',
                    hoverBackgroundColor: '#FF6384'
                }]
            };

            // Datos del gráfico de productos por sucursal (2da sucursal)
            var productosBySucursal2Data = {
                labels: <?php echo json_encode($labels2); ?>,
                datasets: [{
                    label: 'Cantidad de productos',
                    data: <?php echo json_encode($data2); ?>,
                    backgroundColor: '#36A2EB',
                    hoverBackgroundColor: '#36A2EB'
                }]
            };

            // Configuración común para ambos gráficos
            var chartOptions = {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            };

            // Crear el gráfico de productos por sucursal (1ra sucursal)
            var productos1Chart = new Chart(ctx1, {
                type: 'bar',
                data: productosBySucursal1Data,
                options: chartOptions
            });

            // Crear el gráfico de productos por sucursal (2da sucursal)
            var productos2Chart = new Chart(ctx2, {
                type: 'bar',
                data: productosBySucursal2Data,
                options: chartOptions
            });
        </script>

    </div>
</body>
</html>
