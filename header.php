<?php
if (htmlspecialchars($_SERVER["PHP_SELF"]) == "/index.php"){
    // Se incializa la sesión
  session_start();
  if (isset($_SESSION["id_admin"])) {
    header("location:home.php");
  }else{
    session_start();
    if (!isset($_SESSION["id_admin"])) {
      header("location: index.php");
    }
  }
}
?>

<!DOCTYPE  html>
<html>
<head lang="es">
  <meta charset="utf-8" />
  <title>
    <?php if (htmlspecialchars($_SERVER['PHP_SELF'] == "/Tienda/registrar.php")){
      echo "Mi Librería - Registrar";
    }else{
      echo "Mi Librería";
    } ?>
  </title>
  <link rel="stylesheet" type="text/css" href="css/Normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
  <header>
    <a style="text-decoration: none;" href="index.php"><h1> Mi Librería</h1></a>
  </header>