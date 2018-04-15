<?php
session_start();
session_unset($_SESSION["id_admin"]);
session_destroy();
header("location: index.php");
?>