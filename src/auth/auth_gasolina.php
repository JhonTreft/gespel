<?php

require_once '../model/vehiculos.php';
require_once '../controller/gasolina_controller.php';

include '../connection/connection.php';

$Gasolina= new Gasolina_Controller($conn); // Instanciar el controlador y pasar la conexión como parámetro
$Gasolina->handleRequest(); // Llamar a la función handleRequest del controlador
?>
