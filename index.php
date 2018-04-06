<?php

session_start();
if (isset($_SESSION["id_admin"])) {
	header("location:home.php");
}

?>

<!DOCTYPE  html>
<html>
<head lang="es">
	<meta charset="utf-8" />
	<title>Mi Librería</title>
	<link rel="stylesheet" type="text/css" href="css/Normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<header style="display: block">

		<h1 id="h1"> Mi Librería</h1> 

	</header>

	<div class="contenedor">
		<div class="login _50 _40">

			<header>
				<h3>Entrar</h3>
			</header>

			<form action=>

				<div class="campo-formulario">
					<label for="usuario">Usuario:</label> 
					<input type="text" name="usuario" id="usuario"  max="20" />
				</div>

				<div class="campo-formulario">
					<label for="password">Contraseña:</label>
					<input type="password" name="password" id="password"  max="40"  /> 
				</div>

				<div class="campo-formulario">
					<button type="button" class="boton" id="entrar">Iniciar sesión</button>
				</div>
				<span id="error"></span>

			</form>
		</div>

		<div class="login-imagen _50 _60">
			<img alt="Imagen de libros" src="img/back2.jpg" />
		</div>
	</div>

	<footer>
		<div class="footer">
			Sistema de Biblioteca | Mac32 &copy; Todos los Derechos Reservados
		</div>
	</footer>

</body>
</html>
