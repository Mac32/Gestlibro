<?php
  require_once "conexion.php";
  require_once "limpiar.php";

$usuario = limpiar_sql($_POST['usuario']);

  $q_usuario = $conexion->query("SELECT * FROM administrador WHERE usuario = $usuario");

  $f_usuario = $q_usuario->num_rows;

  if($f_usuario == 0){
    echo "aprobado";
  }else{
    echo "error";
  }
?>