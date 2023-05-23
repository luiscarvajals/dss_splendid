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
    <!-- INVENTARIO GENERAL -->
    <?php
        include("bdd.php");
        $sql="SELECT a.id, a.id_sucursal, b.nombre, a.cantidad, a.fecha_actualizacion
        FROM inventario_productos a, productos b
        WHERE a.id_producto = b.id"; // aqui va el query o consulta
        $resultado=mysqli_query($conexion, $sql); // se almacenan los resultados entregados por el query en $resultado
    ?>
    <nav>
        <a href="index.php"><img src="images/logo.jpeg" alt="logo"></a>
        <ul>
            <li><a href="inicio.php">INICIO</a></li>
            <li><a href="ventas.php">VENTAS</a></li>
            <li><a href="personal.php">PERSONAL</a></li>
            <li><a href="inventario.php">INVENTARIO</a></li>
            <li><a href="#">SALIR</a></li>
        </ul>
    </nav>
    <div class="contenedor">
        <h1>INVENTARIO DE HELADO</h1>
        <select name="um" id="um" class="select_opt">
            <option value="">[seleccione la vista]</option>
            <option value="tabla-general">General</option>
            <option value="tabla-sucursal-1">Sucursal 1</option>
            <option value="tabla-sucursal-2">Sucursal 2</option>
        </select>
        
        <table class="table-fill" id="tabla-general">
            <thead>
                <tr>
                    <th class="text-left">ID</th>
                    <th class="text-left">SUCURSAL</th>
                    <th class="text-left">NOMBRE</th>
                    <th class="text-left">CANTIDAD</th>
                    <th class="text-left">FECHA ACTUALIZACION</th>
                    <th class="text-left">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($fila=mysqli_fetch_array($resultado)){ // recorriendo cada fila del resultado
                ?>
                <tr>
                    <td class="text-left"> <?php echo $fila["id"] ?> </td>
                    <td class="text-left"> <?php echo $fila["id_sucursal"] ?> </td>
                    <td class="text-left"> <?php echo $fila["nombre"] ?> </td>
                    <td class="text-left"> <?php echo $fila["cantidad"] ?> </td>
                    <td class="text-left"> <?php echo $fila["fecha_actualizacion"] ?> </td>
                    <td class="text-left">
                        <?php echo "<a href='#'>EDITAR</a>"; ?>
                        -
                        <?php echo "<a href='#'>ELIMINAR</a>"; ?>
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

<br>

        <!-- INVENTARIO SUCURSAL 1 -->
    <?php
        include("bdd.php");
        $sql="SELECT a.id, a.id_sucursal, b.nombre, a.cantidad, a.fecha_actualizacion
        FROM inventario_productos a, productos b
        WHERE a.id_producto = b.id AND a.id_sucursal = 1"; // aqui va el query o consulta
        $resultado=mysqli_query($conexion, $sql); // se almacenan los resultados entregados por el query en $resultado
    ?>

        <table class="table-fill" id="tabla-sucursal-1">
            <thead>
                <tr>
                    <th class="text-left">ID</th>
                    <th class="text-left">SUCURSAL</th>
                    <th class="text-left">NOMBRE</th>
                    <th class="text-left">CANTIDAD</th>
                    <th class="text-left">FECHA ACTUALIZACION</th>
                    <th class="text-left">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($fila=mysqli_fetch_array($resultado)){ // recorriendo cada fila del resultado
                ?>
                <tr>
                    <td class="text-left"> <?php echo $fila["id"] ?> </td>
                    <td class="text-left"> <?php echo $fila["id_sucursal"] ?> </td>
                    <td class="text-left"> <?php echo $fila["nombre"] ?> </td>
                    <td class="text-left"> <?php echo $fila["cantidad"] ?> </td>
                    <td class="text-left"> <?php echo $fila["fecha_actualizacion"] ?> </td>
                    <td class="text-left">
                        <?php echo "<a href='#'>EDITAR</a>"; ?>
                        -
                        <?php echo "<a href='#'>ELIMINAR</a>"; ?>
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

<br>

        <!-- INVENTARIO SUCURSAL 2 -->
        <?php
        include("bdd.php");
        $sql="SELECT a.id, a.id_sucursal, b.nombre, a.cantidad, a.fecha_actualizacion
        FROM inventario_productos a, productos b
        WHERE a.id_producto = b.id AND a.id_sucursal = 2"; // aqui va el query o consulta
        $resultado=mysqli_query($conexion, $sql); // se almacenan los resultados entregados por el query en $resultado
        ?>

        <table class="table-fill" id="tabla-sucursal-2">
            <thead>
                <tr>
                    <th class="text-left">ID</th>
                    <th class="text-left">SUCURSAL</th>
                    <th class="text-left">NOMBRE</th>
                    <th class="text-left">CANTIDAD</th>
                    <th class="text-left">FECHA ACTUALIZACION</th>
                    <th class="text-left">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($fila=mysqli_fetch_array($resultado)){ // recorriendo cada fila del resultado
                ?>
                <tr>
                    <td class="text-left"> <?php echo $fila["id"] ?> </td>
                    <td class="text-left"> <?php echo $fila["id_sucursal"] ?> </td>
                    <td class="text-left"> <?php echo $fila["nombre"] ?> </td>
                    <td class="text-left"> <?php echo $fila["cantidad"] ?> </td>
                    <td class="text-left"> <?php echo $fila["fecha_actualizacion"] ?> </td>
                    <td class="text-left">
                        <?php echo "<a href='#'>EDITAR</a>"; ?>
                        -
                        <?php echo "<a href='#'>ELIMINAR</a>"; ?>
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
    <footer>
        <div class="footer-contenedor">
            <div class="footer-info">
                <div class="footer-contact">
                    <div class="infoimg">
                    <!-- <img src="images/whatsapp.png" alt="hero"> -->
                    <p>TELEFONO: </p>
                    </div>

                    <p class="p1">271825944 </p>
                </div>

                <div class="footer-contact">
                    <div class="infoimg">
                    <!-- <img src="images/sucursal.png" alt="hero"> -->
                    <p>SUCURSALES: </p>
                    </div>

                    <p class="p1">Zona San Pedro Calle, Nicolás Acosta N°420</p>
                    <p class="p1">Zona Sur, Calle 15 de Calacoto</p>
                </div>

                <div class="footer-contact">
                    <div class="infoimg">
                    <!-- <img src="images/facebook.png" alt="hero"> -->
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
</body>

<script>
    var tables = [
        document.getElementById('tabla-general'),
        document.getElementById('tabla-sucursal-1'),
        document.getElementById('tabla-sucursal-2')
    ];

    document.getElementById('um').onchange = function() {
        // hide all tables
        for (var i in tables) {
            tables[i].style.display = "none";
        }
        // get selected value and show it's table
        var selectedValue = this[this.selectedIndex].value;
        if (selectedValue) {
            document.getElementById(selectedValue).style.display = "table";
        }
    };
</script>
</html>
