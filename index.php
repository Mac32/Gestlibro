<?php

session_start();
if (isset($_SESSION["id_admin"])) {
	header("location:home.php");
}

require_once "header.php";

?>
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
