<?php

// Se incializa la sesión
session_start();
if (isset($_SESSION["login"])) {
    header("location:home.php");
}

?>

<!DOCTYPE  html>
<html>
<head lang="es">
<meta charset="utf-8" />
<title>Mi Libreria</title>
<link rel="stylesheet" type="text/css" href="css/Normalize.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>
<body>

	<header>
		<h1>Mi libreria</h1>
	</header>

	<div class="login">
		<form action="">
		
			<div class="campo-formulario">
				<label for="usuario">Usuario:</label>
				<input type="text" name="usuario" id="usuario" />
			</div>
			
			<div class="campo-formulario">
				<label for="password">Contraseña:</label>
				<input type="password" name="password" id="password" />
			</div>
			
			<div class="campo-formulario">
			<button>Iniciar sesión</button>
			</div>
			
		</form>
	</div>
	
	<div class="login-imagen">
		<img alt="Imagen de libros" src="">
	</div>
	
</body>
</html>
