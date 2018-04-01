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

</body>
</html>
