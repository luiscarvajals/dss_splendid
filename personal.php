<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "splendid";

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
    <title>Personal</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
    <script src='js/index.js'></script>
    <script src='personalstyle.css'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .chart-section {
            margin-top: 45px;
        }
    </style>
    

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
</head>

<body>
    <div class="container">
        <header>
            <h1>Personal de la Tienda de Helados</h1>
        </header>

        <br><br>
        <div class="container">
            <div class="row">
                <?php foreach ($empleados as $empleado): ?>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up">
                        <div class="card">
                            <img src="<?php echo $empleado['imagen']; ?>" alt="Foto de <?php echo $empleado['nombre']; ?>">
                            <div class="info">
                                <h3>
                                    <?php echo "Nombre completo: " . $empleado['nombre'] . " " . $empleado['apellido']; ?>
                                </h3>
                                <p>
                                    <?php echo "Email:"." ".$empleado['email']; ?>
                                </p>
                                <p>
                                    <?php echo "Cargo:"." ". $empleado['cargo']; ?>
                                </p>
                                <p>
                                    <?php echo "Direccion:"." ". $empleado['direccion']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <br><br>
                <?php endforeach; ?>
                
            </div>
        </div>
        <br><br>
        <a href="agregar_empleado.php" class="btn btn-primary">Agregar Empleado</a>
        <a href="eliminar_empleado.php" class="btn btn-primary">Eliminar Empleado</a>
        <a href="modificar_empleado.php" class="btn btn-primary">Modificar Empleado</a>
        <br>

        <!-- Gráfico de empleados por sucursal -->
        <div class="chart-section">
            <h2>Empleados por Sucursal</h2>
            <div class="chart-container">
                <canvas id="empleadosBySucursalChart" width="400" height="200"></canvas>
            </div>
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

        $sql = "SELECT s.nombre AS sucursal, COUNT(ve.id_empleado) AS cantidad_empleados
            FROM sucursales s
            LEFT JOIN ventas_empleados ve ON s.id = ve.id_empleado
            GROUP BY s.nombre";

        $result = $conn->query($sql);

        // Crear un array con los datos de empleados por sucursal
        $labels = [];
        $data = [];

        while ($row = $result->fetch_assoc()) {
            $labels[] = $row["sucursal"];
            $data[] = $row["cantidad_empleados"];
        }

        $conn->close();
        ?>

        <script>
            // Obtener el contexto del lienzo del gráfico
            var ctx = document.getElementById('empleadosBySucursalChart').getContext('2d');

            // Datos del gráfico de empleados por sucursal
            var empleadosBySucursalData = {
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

            // Crear el gráfico de barras de empleados por sucursal
            var empleadosBySucursalChart = new Chart(ctx, {
                type: 'bar',
                data: empleadosBySucursalData,
                options: chartOptions
            });
        </script>


        <footer>
            <p>2023 por: Universidad Católica Boliviana "San Pablo"</p>
        </footer>
        <script>
            AOS.init({
                duration: 1000
            });
        </script>
</body>
</html>
