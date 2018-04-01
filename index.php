<?php

session_start();
if (isset($_SESSION["login"])){
    header("location:home");
}

?>

<!DOCTYPE  html>
<html>
<head lang="es">
<meta charset="utf-8" />
<title>Mi Libreria</title>
<link rel="stylesheet" type="text/css"  href="css/style.css" />
</head>
<body>

</body>
</html>
