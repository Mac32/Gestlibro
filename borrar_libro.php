<?php
require_once "comprobar_in.php";
require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $id_libro = $_POST["id_libro"];
// Preparamos la consulta, para luego bindear los valores recibidos por POST
  if ($sentencia = $conexion->prepare("DELETE FROM libros WHERE id_libro = ?"))

//bindear los parámetros para marcadores
    $sentencia->bind_param("i", $id_libro);

//Ejecutar la consulta

  if ($sentencia->execute()) {

    echo "exitoso";

  }else{
    echo "error";
  }
$sentencia->close();
}
$conexion->close();

?>