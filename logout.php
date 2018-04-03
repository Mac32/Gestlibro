<?php
session_start();
session_unset($_SESSION["id_admin"]);
header("location: index.php");
?>