<?php
require_once '../model/user.php';
require_once '../controller/login_user_controller.php';
include '../connection/connection.php';

$loginController = new Login_Controller($conn); // Instanciar el controlador y pasar la conexión como parámetro
$loginController->handleRequest(); // Llamar a la función handleRequest del controlador
?>
