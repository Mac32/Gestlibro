<?php 
session_start();
if (!isset($_SESSION["id_admin"])) {
  header("location: index.php");
}
?>