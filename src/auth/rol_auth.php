<?php

require_once '../model/rol.php';
require_once '../controller/rol_controller.php';

include '../connection/connection.php';

$Gasolina= new Rol_Controller($conn); // Instanciar el controlador y pasar la conexión como parámetro
$Gasolina->handleRequest(); // Llamar a la función handleRequest del controlador
?>
