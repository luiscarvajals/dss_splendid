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