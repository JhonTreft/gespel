<?php 

require_once '../model/vehiculos.php';
require_once '../connection/connection.php';

class Gestion_Vehicular_Controller {
  private $model;
  private $conn;

  public function __construct($conn) {
    $this->model = new VehiculosModel($conn);
    $this->conn = $conn;
  }

  public function handleRequest() {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = mysqli_real_escape_string($this->conn, $_POST["nombre"]);
    $kilometraje = mysqli_real_escape_string($this->conn, $_POST["kilometraje"]);
    $placa = mysqli_real_escape_string($this->conn, $_POST["placa"]);


    $result = $this->model->gestionVehicular($this->conn,$nombre,$placa,$kilometraje);
      //hacer esto mas logico las dos cosas renderizan lo mismo mi bro 
      //solo coloca una entonces

      
      if($result === true) {
        session_start();
        $_SESSION['message_title'] = "message";
        $_SESSION['message_content'] = "Datos Enviados Correctamente";
        header('Location: ../view/main.php');
      }
    }
  }
}


