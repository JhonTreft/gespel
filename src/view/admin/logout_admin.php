<?php
session_start();

$_SESSION["loggedin_admin"] = false;
$_SESSION["titulo_notificacion"] = "Logout";
$_SESSION["notificacion"] = "Haz Cerrado Seccion";

header('Location: ../login.php');
exit;