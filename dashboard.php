<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
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
    <!-- Llamar a una función para generar el pdf -->
    <button onclick="generatePDF()" >Guardar imagen en PDF</button>
    <div>
        <label for="sucursal">Sucursal:</label>
        <select id="sucursal" onchange="updateSalesChart(this.value)">
            <option value="todas" <?php if (isset($_GET['sucursal']) && $_GET['sucursal'] === 'todas') echo 'selected'; ?>>Todas las sucursales</option>
            <option value="1" <?php if (isset($_GET['sucursal']) && $_GET['sucursal'] === '1') echo 'selected'; ?>>SAN PEDRO</option>
            <option value="2" <?php if (isset($_GET['sucursal']) && $_GET['sucursal'] === '2') echo 'selected'; ?>>ZONA SUR</option>
        </select>
    </div>
    <div id="reportPage">
        <div id="chartContainer" style="width: 100%;float: left;">
            <canvas id="salesChart" width="400" height="200"></canvas>
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

// Consulta para obtener los datos de ventas semanales
$sql = "SELECT DATE_FORMAT(fecha_venta, '%Y-%m-%d') AS fecha, SUM(cantidad) AS total
FROM Ventas
WHERE fecha_venta BETWEEN CURDATE() -  INTERVAL 7 DAY AND CURDATE()";

if (isset($_GET['sucursal']) && $_GET['sucursal'] !== 'todas') {
    $sucursal = $_GET['sucursal'];
    $sql .= " AND id_sucursal = '$sucursal'";
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
        // Función para generar el pdf
        function generatePDF() {
            
            // Verificar que se ejecute la función
            console.log('click');

            // Crear el PDF y descargarlo
            var pdf = new jspdf.jsPDF();
            var content = document.getElementById("reportPage");

            pdf.text("Ventas de la útima semana", 10, 10);
            //Añadir la fecha actual
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth() + 1;
            var year = date.getFullYear();
            pdf.text("Fecha: " + day + "/" + month + "/" + year, 10, 20);
            // Añadir el contenido de la página

            // Renderizar elementos canvas en el PDF
            var canvasElements = content.getElementsByTagName("canvas");
            for (var i = 0; i < canvasElements.length; i++) {
                var canvas = canvasElements[i];
                var imgData = canvas.toDataURL("image/jpeg", 1.0);
                pdf.addImage(imgData, "JPEG", 10, 30, 180, 120);
            }
            // Mostrar el PDF
            var dataURL=pdf.output('datauristring');
           //Mostrar el PDF en el navegador
            pdf.output('dataurlnewwindow');
        }
    </script>



    <!--Grafico de tendecia de Stock por sucursal-->
    <h2>Stock</h2>
    <div>
        <label for="sucursal2">Sucursal:</label>
        <select id="sucursal2" onchange="updateSalesChart2(this.value)">
            <option value="todas" <?php if (isset($_GET['sucursal2']) && $_GET['sucursal2'] === 'todas') echo 'selected'; ?>>Todas las sucursales</option>
            <option value="1" <?php if (isset($_GET['sucursal2']) && $_GET['sucursal2'] === '1') echo 'selected'; ?>>SAN PEDRO</option>
            <option value="2" <?php if (isset($_GET['sucursal2']) && $_GET['sucursal2'] === '2') echo 'selected'; ?>>ZONA SUR</option>
        </select>
    </div>
    <button onclick="generatePDF2()" >Guardar imagen en PDF</button>
    <div id="reportPage2">
        <div id="pedidosContainer" style="width: 100%;float: left;">
        <canvas id="pedidosChart" width="400" height="200"></canvas>
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

    // Consulta para obtener la tendencia de inventario por sucursal
    $sql = "SELECT DATE_FORMAT(fecha_actualizacion, '%Y-%m-%d') AS fecha, SUM(cantidad) AS total
            FROM inventario_productos
            WHERE fecha_actualizacion BETWEEN CURDATE() - INTERVAL 7 DAY AND CURDATE()";
    if (isset($_GET['sucursal2']) && $_GET['sucursal2'] !== 'todas') {
        $sucursal = $_GET['sucursal2'];
        $sql .= " AND id_sucursal = '$sucursal'";
    }
    $sql .= " GROUP BY fecha_actualizacion";

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
        function updateSalesChart2(sucursal2) {
            var urlParams = new URLSearchParams(window.location.search);
            urlParams.set('sucursal2', sucursal2);
            window.location.search = urlParams.toString();
        }
        // Función para generar el pdf
        function generatePDF2() {
            
            // Verificar que se ejecute la función
            console.log('click');

            // Crear el PDF y descargarlo
            var pdf = new jspdf.jsPDF();
            var content = document.getElementById("reportPage2");

            pdf.text("Pedidos de la útima semana", 10, 10);
            //Añadir la fecha actual
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth() + 1;
            var year = date.getFullYear();
            pdf.text("Fecha: " + day + "/" + month + "/" + year, 10, 20);
            // Añadir el contenido de la página

            // Renderizar elementos canvas en el PDF
            var canvasElements = content.getElementsByTagName("canvas");
            for (var i = 0; i < canvasElements.length; i++) {
                var canvas = canvasElements[i];
                var imgData = canvas.toDataURL("image/jpeg", 1.0);
                pdf.addImage(imgData, "JPEG", 10, 30, 180, 120);
            }
            // Mostrar el PDF
            var dataURL=pdf.output('datauristring');
           //Mostrar el PDF en el navegador
            pdf.output('dataurlnewwindow');
        }
    </script>
    
    <!--Grafico de ventas por sabores de helado-->
    <h2>Ventas por sabores de helado</h2>
    <button onclick="generatePDF3()" >Guardar imagen en PDF</button>
    <div id="reportPage3">
        <div class="chart-container">
            <canvas id="ventasBySaborChart" width="400" height="200"></canvas>
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

    $sql = "SELECT s.nombre AS sabor, SUM(v.cantidad) AS total
    FROM Ventas v
    INNER JOIN Productos p ON v.id_producto = p.id
    INNER JOIN Sabores s ON p.id_sabor = s.id
    GROUP BY p.id
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
        // Función para generar el pdf
        function generatePDF3() {
            
            // Verificar que se ejecute la función
            console.log('click');

            // Crear el PDF y descargarlo
            var pdf = new jspdf.jsPDF();
            var content = document.getElementById("reportPage3");

            pdf.text("Ventas por sabores de healdo", 10, 10);
            //Añadir la fecha actual
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth() + 1;
            var year = date.getFullYear();
            pdf.text("Fecha: " + day + "/" + month + "/" + year, 10, 20);
            // Añadir el contenido de la página

            // Renderizar elementos canvas en el PDF
            var canvasElements = content.getElementsByTagName("canvas");
            for (var i = 0; i < canvasElements.length; i++) {
                var canvas = canvasElements[i];
                var imgData = canvas.toDataURL("image/jpeg", 1.0);
                pdf.addImage(imgData, "JPEG", 10, 30, 180, 120);
            }
            // Mostrar el PDF
            var dataURL=pdf.output('datauristring');
           //Mostrar el PDF en el navegador
            pdf.output('dataurlnewwindow');
        }
    </script>





<!--Grafico de ventas por sucursal-->
<h2>Ventas por Sucursal</h2>

    <button onclick="generatePDF4()" >Guardar imagen en PDF</button>
    <div id="reportPage4">
        <div class="chart-container">
            <canvas id="ventasBySucursalChart" width="400" height="200"></canvas>
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

   
    $sql = "SELECT s.nombre AS sucursal, SUM(v.cantidad) AS total
    FROM Ventas v
    INNER JOIN Sucursales s ON v.id_sucursal = s.id
    GROUP BY v.id_sucursal";

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
        // Función para generar el pdf
        function generatePDF4() {
            
            // Verificar que se ejecute la función
            console.log('click');

            // Crear el PDF y descargarlo
            var pdf = new jspdf.jsPDF();
            var content = document.getElementById("reportPage4");

            pdf.text("Ventas por sabores de healdo", 10, 10);
            //Añadir la fecha actual
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth() + 1;
            var year = date.getFullYear();
            pdf.text("Fecha: " + day + "/" + month + "/" + year, 10, 20);
            // Añadir el contenido de la página

            // Renderizar elementos canvas en el PDF
            var canvasElements = content.getElementsByTagName("canvas");
            for (var i = 0; i < canvasElements.length; i++) {
                var canvas = canvasElements[i];
                var imgData = canvas.toDataURL("image/jpeg", 1.0);
                pdf.addImage(imgData, "JPEG", 10, 30, 180, 120);
            }
            // Mostrar el PDF
            var dataURL=pdf.output('datauristring');
           //Mostrar el PDF en el navegador
            pdf.output('dataurlnewwindow');
        }
    </script>
    
</body>
</html>

