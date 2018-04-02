<?php

/**
 * Valida la existencia del  usuario y contraseña en la base de datos
 */
require_once "conexion.php";


/**
 * [$usuario guarda el valor de usuario introducido en el login]
 * @var [type text]
 * [$password guarda el valor de password introducido en el login]
 * @var [type text]
 */

$usuario = $_POST["usuario"];
$password = $_POST["password"];

//Se realiza la consulta a la base de datos

$q_admin = $conexion->query("SELECT * FROM administrador WHERE usuario = '$usuario' && password = '$password'") or die(mysqli_error());

//Se convierte el resultado de la consulta en un array correspondiente a una fila de la misma
$f_admin = $q_admin->fetch_array();

//Se obtiene el número de filas de una consulta

$v_admin = $q_admin->num_rows;

if ($v_admin > 0){

  echo 'Acceso';
  session_start();
  $_SESSION["id_admin"] = $f_admin["id_admin"];
}else{
  echo "Error";
}

?>