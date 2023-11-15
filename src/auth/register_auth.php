<?php 

require_once '../model/user.php';
require_once '../controller/register_controller.php';
include '../connection/connection.php';

$registerController = new Register_Controller($conn); // Instanciar el controlador y pasar la conexión como parámetro
$registerController->handleRequest(); 
?>
