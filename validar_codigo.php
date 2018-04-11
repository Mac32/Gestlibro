<?php 

require_once "comprobar_in.php";
require_once "conexion.php";


if ($_SERVER["REQUEST_METHOD"] === "GET") {
  $codigo = $_GET["codigo"];

  if($sentencia = $conexion->prepare("SELECT * FROM libros WHERE codigo = ?")){
    $sentencia->bind_param("s", $codigo);
  }
  if ($sentencia->execute()) {
    $resultado = $sentencia->get_result();
    $filas = $resultado->num_rows;
    if ($filas == 0) {
      echo "valido";
    }else{
      echo "error";
    }
  }
}

?>