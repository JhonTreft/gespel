<?php

require_once '../model/vehiculos.php';
require_once '../controller/gestion_vehicular_controller.php';

include '../connection/connection.php';

$Gasolina= new Gestion_Vehicular_Controller($conn); // Instanciar el controlador y pasar la conexión como parámetro
$Gasolina->handleRequest(); // Llamar a la función handleRequest del controlador
?>
