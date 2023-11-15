<?php 
session_start();
$_SESSION["loggedin"] = false;
$_SESSION["titulo_notificacion"] = "Logout";
$_SESSION["notificacion"] = "Haz Cerrado Seccion";

header('Location: ../view/login.php');
exit;
