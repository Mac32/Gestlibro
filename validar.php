<?php

/**
* Este archivo valida la existencia del  usuario y contraseña en la base de datos
*/
require_once "conexion.php";
require_once "limpiar.php";

/**
* [$usuario guarda el valor de usuario introducido en el login]
* @var [type text]
* [$password guarda el valor de password introducido en el login]
* @var [type text]
*/

$usuario = limpiar_sql($_POST["usuario"]);
$password = limpiar_sql($_POST["password"]);

//Se realiza la consulta a la base de datos

if ($q_admin = $conexion->prepare("SELECT * FROM administrador WHERE usuario = ? AND password = md5(?)")){

  $q_admin->bind_param("ss", $usuario, $password);

  if ($q_admin->execute()) {

    $resultado = $q_admin->get_result();

  }else{
    die(mysqli_error());
  }
  
}else{
  die("No se pudo preparar la conexion"+mysqli_error());
}

//Se convierte el resultado de la consulta en un array correspondiente a una fila de la misma
$f_admin = $resultado->fetch_array();

//Se obtiene el número de filas de una consulta

$v_admin = $resultado->num_rows;

if ($v_admin > 0){
  
  echo 'Acceso';
  session_start();
  $_SESSION["id_admin"] = $f_admin["id_admin"];
}else{
  echo "Error";
}

$q_admin->close();

$conexion->close();

?>