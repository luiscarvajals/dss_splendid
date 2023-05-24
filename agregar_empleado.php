<html>

<head>
    <title>Agregar Empleado</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <meta charset='utf-8'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
    <script src='js/index.js'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap"
        rel="stylesheet">
    <style>
        p {
            color: #31378f;
        }

        input {
            width: 200px;
            height: 30px;
        }

        #container0 {
            height: 160px;
            background-color: #a1a1a1d4;
        }

        #container1 {
            width: 30%;
            float: left;
            margin-top: 100px;
            margin-left: 160px;
        }

        #container2 {
            width: 30%;
            float: left;
            margin-top: 100px;
        }

        #container3 {
            width: 30%;
            float: left;
            margin-top: 100px;
        }

        h1 {
            color: blac;
            font-size: 60px;
            margin-left: 30px;
        }

        h2 {
            color: black;
            font-size: 20px;
            margin-left: 30px;
        }

        h3 {
            color: #31378f;
        }

        button {
            width: 300px;
            height: 50px;
            margin-top: 40px;
            margin-left: 650px;
            font-size: 18px;
            background-color: black;
            color: white;
            border-radius: 20px;
        }

        div {
            padding: 5px;
            margin-left: 50px;
            margin-right: 50px;
        }

        caption {
            font-size: 20px;
            color: #31378f;
        }

        div {
            border-color: #a1a1a1d4;
            border-width: 5px;
            border-style: solid;
            background-color: #2a549b;
        }
    </style>
</head>

<body>
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

    <p><br><br><br></p>

    <div class="c1">
        <form id="formajax" method="POST">
            <center>
                    <h2>INGRESAR DATOS DEL EMPLEADO</h2>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="apellido">Apellidos:</label>
                            <input type="text" class="form-control" id="apellido" name="apellido">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                            <input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="direccion">Direccion:</label>
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="telefono">Telefono:</label>
                            <input type="text" class="form-control" id="telefono" name="telefono">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="cargo">Cargo:</label>
                            <input type="text" class="form-control" id="cargo" name="cargo">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="sueldo">Sueldo:</label>
                            <input type="text" class="form-control" id="sueldo" name="sueldo">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="fecha_contratacion">Fecha de contratacion:</label>
                            <input type="text" class="form-control" id="fecha_contratacion" name="fecha_contratacion">
                        </div>
                    </div>
                </form>
                <br>
                <br>
                    <input type="submit" value="Enviar" id="btnEnviar">
                    <input type="reset" value="Borrar">
            </center>
        </form>
    </div>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function () {
        $('#btnEnviar').click(function () {
            var datos = $('#formajax').serialize();
            $.ajax({
                type: "POST",
                url: "agregados.php",
                data: datos,
                success: function (r) {
                    if (r == 1) {
                        alert("Registro completo");
                    } else {
                        alert("fallo el server");
                    }
                }
            });
            return false;
        });
    });
</script>