<?php 
require_once "conexion.php";

$nombre    = $_POST['nombre'];
$autor     = $_POST['autor'];
$estado    = $_POST['estado'];
$codigo    = $_POST['codigo'];
$tipo      = $_POST['tipo'];
$editorial = $_POST['editorial'];

// $nombre    = 'qwe';
// $autor     = 'qwe';
// $estado    = 'Disponible';
// $codigo    = 'qwe';
// $tipo      = 'qwe';
// $editorial = 'qwe';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $consulta = $conexion->query("INSERT INTO libros (nombre, autor, estado, codigo, tipo, editorial) VALUES ('$nombre', '$autor', '$estado', '$codigo', '$tipo', '$editorial')");
  if ($consulta) {
    echo "exitoso";
  }else{
    echo "error";
  }
}
?>