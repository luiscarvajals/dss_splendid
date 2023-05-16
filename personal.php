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
                                    <?php echo "Nombre completo: " . $empleado['nombre'] . " " . $empleado['apellidoP'] . " " . $empleado['apellidoM']; ?>
                                </h3>
                                <p>
                                    <?php echo "Email:"." ".$empleado['email']; ?>
                                </p>
                                <p>
                                    <?php echo "Puesto:"." ". $empleado['puesto']; ?>
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