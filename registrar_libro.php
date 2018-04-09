<?php 
require_once "conexion.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

  $nombre    = $_POST['nombre'];
  $autor     = $_POST['autor'];
  $estado    = $_POST['estado'];
  $codigo    = $_POST['codigo'];
  $tipo      = $_POST['tipo'];
  $editorial = $_POST['editorial'];
  if ($nombre != "" && $autor != "" && $estado != "" && $codigo != "" && $tipo != "" && $editorial) {

    if($consulta = $conexion->prepare("INSERT INTO libros (nombre, autor, estado, codigo, tipo, editorial) VALUES (?, ?, ?, ?, ?, ? )")){
      $consulta->bind_param("ssssss", $nombre, $autor, $estado, $codigo, $tipo, $editorial);
      if ($consulta->execute()) {
        echo "exitoso";
      }else{
        echo "error";
      }
      $consulta->close();
    }
    $conexion->close();
  }else{
    echo "vacio";
  }
}
?>