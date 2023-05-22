<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Iniciar Sesión</title>
	<script src="jquery-3.5.0.min.js"></script>	
	<style type="text/css">
		body {
            background-image: url('images/cover.jpg');
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
		
		div.iniciosesion {
		background-color: rgba(255, 255, 255, 0.7);
		border-radius: 20px;
		width: 300px;
		height: 350px;
		margin-top: 170px;
		padding-top: 60px;
	}

	h1 {
		color: #7f0000;
		text-align: center;
	}

	#usuario, #password {
		background-color: #eee0ff;
		width: 200px;
		height: 30px;
		margin-top: 20px;
		border: none;
		border-radius: 5px;
		padding: 5px;
	}

	#btnEnviar {
		background-color: #7f0000;
		width: 150px;
		height: 30px;
		margin-top: 40px;
		color: white;
		border: none;
		border-radius: 20px;
	}

	#btnEnviar:hover {
		background-color: #a80000;
		cursor: pointer;
	}
</style>
</head>
<body>
<<<<<<< HEAD
	<center>
		<div class="iniciosesion">
			<form method="POST">
				<h1>Iniciar Sesión</h1>
				<input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario"><br>
				<input type="password" name="password" id="password" placeholder="Contraseña"><br>
				<input id="btnEnviar" name="btnEnviar" type="submit" value="Entrar"/>
			</form>		
		</div>		
	</center>
=======
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
    <img class="portada" src="images/cover.jpg" alt="hero">
    <div class="contenedor">
        <h1 class="bienvenida">BIENVENIDO DE VUELTA</h1>
        <div class="recomendacion">
            <h2>Esta es la recomendacion para el dia de hoy:</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates iusto temporibus omnis est consequuntur enim ad dolore nam, hic reiciendis sed consequatur, inventore quaerat. Debitis eos consectetur culpa temporibus libero. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt esse totam ut, corrupti, eos rerum cumque necessitatibus veniam eum ducimus vel quam rem nobis, iste facere temporibus doloribus? Culpa, tempore.</p>
        </div>
    </div>

    <div class="contenedor-info">
        <h1 class="bienvenida">SOBRE NOSOTROS</h1>
        <div class="contenedor-historia">
            <img class="imghist" src="images/historia_splendid.jpg" alt="hero">
                <div class="cont-texth">
                <h2>NUESTRA HISTORIA</h2>
                <p>Los tarijeños Óscar Hevia y Enrique Campero llegaron a La Paz en la década del 50 del siglo pasado buscando mejores días. Se instalaron en la zona de San Pedro y en la esquina de las calles Nicolás Acosta y Héroes
                del Acre decidieron montar un negocio, donde ofrecían productos de cafetería, pastelería y heladería.</p>
                <p>Eran dos amantes de la música de la Nueva Ola que empezaba a sonar en las principales ciudades del país, así que a la hora de bautizar su negocio resolvieron ponerle el nombre de un grupo juvenil de la zona de
                Sopocachi, que también abrazaba el contagioso ritmo: Splendid</p>
                <p>Fue en agosto de 1958. Estuvieron al frente de su primera sede hasta 1964, año en que lograron mudarse a un lugar mucho más amplio en la esquina 
                de la calle Nicolás Acosta y Mariscal Sucre, desde donde a sus 57 años la heladería continúa en vigencia y es casi un patrimonio de la ciudad.</p>
                </div>
        </div>

        <h1 class="bienvenida">VALORES</h1>
        <div class="contenedor-mvv">
            <div class="mvv-info">
                <h2>MISION</h2>
                <img class="img" src="images/mision_splendid.jpg" alt="hero">
                <p>Transformar la fruta en deliciosos helados artesanales, utilizando ingredientes de alta calidad y elaborados con procesos tradicionales, para brindar a los clientes una 
                experiencia única y satisfactoria al degustar sus productos.</p>
            </div>
            <div class="mvv-info">
                <h2>VISION</h2>
                <img class="img" src="images/vision_splendid.jpg" alt="hero">
                <p>Ser reconocidos como la mejor heladería artesanal de La Paz, manteniendo siempre la calidad y sabor de sus productos, elaborados con las mejores frutas y 
                ofreciendo variedades que satisfagan los gustos de su clientela.</p>
            </div>
        </div>
        <div class="valores-info">
                <h2>VALORES</h2>
                <img class="img" src="images/valores_splendid.jpg" alt="hero">
                <div class="cont-textmvv">
                    <div class="grupo">
                    <h1>Tradición:</h1> <p>La elaboración de helados con procesos tradicionales nos permiten crear sabores únicos y auténticos.</p>
                    </div>
                    <div class="grupo">
                    <h1>Calidad:</h1> <p>Nos esforzamos por utilizar ingredientes de alta calidad y que satisfagan las expectativas de nuestros clientes.</p>
                    </div>
                    <div class="grupo">
                    <h1>Excelencia:</h1> <p>Nos esforzamos por ser la mejor heladería artesanal de La Paz y mejorar constantemente, superando las expectativas.</p>
                    </div>
                </div>
        </div>
    </div>
    
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
>>>>>>> f6b77882942a708c014b0d7e4d51f5be3e80a563
</body>
</html>

<?php
	// Conexión con la base de datos
	if(isset($_POST['btnEnviar'])) {
		$conexion = mysqli_connect('localhost', 'root', '', 'tienda_helados');

		$usuario = $_POST['usuario'];
		$password = $_POST['password'];	

		// SELECT 

		$sql = "SELECT * FROM usuario";
		$result = mysqli_query($conexion, $sql);

		$usuario_registrado = false;
		$password_correcta = false;

		while($mostrar = mysqli_fetch_array($result)){
			if($usuario == $mostrar['usuario']){
				$usuario_registrado = true;
				if($password == $mostrar['password']){
					$password_correcta = true;
				} else {
					$password_correcta = false;
				}
			}
		}

		if($password_correcta){
			header('Location: inicio.php');
		}

		if($usuario_registrado && !$password_correcta){
			?>
			<script>
				alert("Contraseña incorrecta");
			</script>
			<?php
		}

		if(!$usuario_registrado && !$password_correcta){ 
			?>
			<script>
				alert("Usuario no registrado");
			</script>
			<?php
		}
	}
?>