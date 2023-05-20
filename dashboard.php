<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .chart-container {
            width: 800px;
            height: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <!--Grafico de ventas en la ultima semana por sucursal-->
    <h2>Ventas de la última semana</h2>
    <div>
        <label for="sucursal">Sucursal:</label>
        <select id="sucursal" onchange="updateSalesChart(this.value)">
            <option value="todas">Todas las sucursales</option>
            <option value="1">SAN PEDRO</option>
            <option value="2">ZONA SUR</option>
        </select>
    </div>
    <canvas id="salesChart" width="400" height="200"></canvas>
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

    // Consulta para obtener los datos de ventas semanales
    $sql = "SELECT DATE_FORMAT(fecha_venta, '%Y-%m-%d') AS fecha, SUM(cantidad_vendida) AS total
    FROM Ventas
    WHERE fecha_venta BETWEEN CURDATE() - INTERVAL DAYOFWEEK(CURDATE())-1 DAY AND CURDATE()";

if (isset($_GET['sucursal']) && $_GET['sucursal'] !== 'todas') {
$sucursal = $_GET['sucursal'];
$sql .= " AND Sucursales_id_sucursal = '$sucursal'";
}

$sql .= " GROUP BY fecha_venta";

$result = $conn->query($sql);

    // Crear un array con los datos de ventas semanales
    $labels = [];
    $data = [];

    while ($row = $result->fetch_assoc()) {
        $labels[] = $row["fecha"];
        $data[] = $row["total"];
    }

    $conn->close();
    ?>
    <script>
        // Obtener el contexto del lienzo del gráfico
        var ctx = document.getElementById('salesChart').getContext('2d');

        // Datos del gráfico de ventas semanales
        var salesData = {
            labels: <?php echo json_encode($labels); ?>,
            datasets: [{
                label: 'Ventas Semanales',
                data: <?php echo json_encode($data); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };

        // Configuración del gráfico
        var chartOptions = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        precision: 0
                    }
                }]
            }
        };

        // Crear el gráfico de ventas semanales
        var salesChart = new Chart(ctx, {
            type: 'line',
            data: salesData,
            options: chartOptions
        });

        // Función para actualizar el gráfico de ventas según la sucursal seleccionada
        function updateSalesChart(sucursal) {
            var urlParams = new URLSearchParams(window.location.search);
            urlParams.set('sucursal', sucursal);
            window.location.search = urlParams.toString();
        }
    </script>



    <!--Grafico de pedidos en la ultima semana por sucursal-->
    <h2>Pedidos de la última semana</h2>
    
    <canvas id="pedidosChart" width="400" height="200"></canvas>
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

    // Consulta para obtener los datos de pedidos semanales
    $sql = "SELECT DATE_FORMAT(fecha, '%Y-%m-%d') AS fecha, SUM(cantidad_pedido) AS total
            FROM pedidos
            WHERE fecha BETWEEN CURDATE() - INTERVAL DAYOFWEEK(CURDATE())-1 DAY AND CURDATE()";
    $sql .= " GROUP BY fecha";

    $result2 = $conn->query($sql);

    // Crear un array con los datos de ventas semanales
    $labels2 = [];
    $data2 = [];

    while ($row2 = $result2->fetch_assoc()) {
        $labels2[] = $row2["fecha"];
        $data2[] = $row2["total"];
    }

    $conn->close();
    ?>
    <script>
        // Obtener el contexto del lienzo del gráfico
        var ctx = document.getElementById('pedidosChart').getContext('2d');

        // Datos del gráfico de ventas semanales
        var pedidosData = {
            labels: <?php echo json_encode($labels2); ?>,
            datasets: [{
                label: 'Pedidos Semanales',
                data: <?php echo json_encode($data2); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };

        // Configuración del gráfico
        var chartOptions = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        precision: 0
                    }
                }]
            }
        };

        // Crear el gráfico de ventas semanales
        var pedidosChart = new Chart(ctx, {
            type: 'line',
            data: pedidosData,
            options: chartOptions
        });
    </script>
    
    <!--Grafico de ventas por sabores de helado-->
    <h2>Ventas por sabores de helado</h2>
    <div class="chart-container">
        <canvas id="ventasBySaborChart" width="400" height="200"></canvas>
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

    $sql = "SELECT s.nombre AS sabor, SUM(v.cantidad_vendida) AS total
    FROM Ventas v
    INNER JOIN Productos p ON v.Productos_id_productos = p.id_productos
    INNER JOIN Sabores s ON p.Sabores_id_sabores = s.id_sabores
    GROUP BY p.Sabores_id_sabores
    ORDER BY total DESC
    LIMIT 5";

$result3 = $conn->query($sql);

    // Crear un array con los datos de ventas semanales
    $labels3 = [];
    $data3 = [];

    while ($row3 = $result3->fetch_assoc()) {
        $labels3[] = $row3["sabor"];
        $data3[] = $row3["total"];
    }

    $conn->close();
    ?>
    <script>
        // Obtener el contexto del lienzo del gráfico
        var ctx = document.getElementById('ventasBySaborChart').getContext('2d');

        // Datos del gráfico de ventas semanales
        var ventasBySaborData = {
            labels: <?php echo json_encode($labels3); ?>,
            datasets: [{
                data: <?php echo json_encode($data3); ?>,
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
            responsive: true
        };

        // Crear el gráfico de ventas por sabores
        var salesChart = new Chart(ctx, {
            type: 'pie',
            data: ventasBySaborData,
            options: chartOptions
        });
    </script>





<!--Grafico de ventas por sucursal-->
<h2>Ventas por Sucursal</h2>
    <div class="chart-container">
        <canvas id="ventasBySucursalChart" width="400" height="200"></canvas>
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

   
    $sql = "SELECT s.nombre AS sucursal, SUM(v.cantidad_vendida) AS total
    FROM Ventas v
    INNER JOIN Sucursales s ON v.Sucursales_id_sucursal = s.id_sucursal
    GROUP BY v.Sucursales_id_sucursal";

    $result4= $conn->query($sql);

    // Crear un array con los datos de ventas semanales
    $labels4 = [];
    $data4 = [];

    while ($row4 = $result4->fetch_assoc()) {
        $labels4[] = $row4["sucursal"];
        $data4[] = $row4["total"];
    }

    $conn->close();
    ?>
    <script>
        // Obtener el contexto del lienzo del gráfico
        var ctx = document.getElementById('ventasBySucursalChart').getContext('2d');

        // Datos del gráfico de ventas semanales
        var ventasBySucursalData = {
            labels: <?php echo json_encode($labels4); ?>,
            datasets: [{
                data: <?php echo json_encode($data4); ?>,
                backgroundColor: [
                    '#FF6384',
                    '#36A2EB'
                ],
                hoverBackgroundColor: [
                    '#FF6384',
                    '#36A2EB'
                ]
            }]
        };

        // Configuración del gráfico
        var chartOptions2 = {
            responsive: true
        };

        // Crear el gráfico de ventas por sabores
        var salesChart2 = new Chart(ctx, {
            type: 'pie',
            data: ventasBySucursalData,
            options: chartOptions2
        });
    </script>

</body>
</html>

