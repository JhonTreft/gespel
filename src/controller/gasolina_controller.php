<?php 

require_once '../model/vehiculos.php';
require_once '../connection/connection.php';

class Gasolina_Controller {
  private $model;
  private $conn;

  public function __construct($conn) {
    $this->model = new VehiculosModel($conn);
    $this->conn = $conn;
  }

  public function handleRequest() {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $nombre = mysqli_real_escape_string($this->conn, $_POST["name"]);
    $estacion = mysqli_real_escape_string($this->conn, $_POST["estacion"]);
    $placa = mysqli_real_escape_string($this->conn, $_POST["placa"]);
    $cantidad = mysqli_real_escape_string($this->conn, $_POST["cantidad"]);
    $valor_litro = mysqli_real_escape_string($this->conn,$_POST["valor_litro"]);
    $tipo_combustible = mysqli_real_escape_string($this->conn, $_POST["combustible"]);
    $valor = mysqli_real_escape_string($this->conn,$_POST["valor"]);   

    $result = $this->model->gasolina($this->conn,$placa,$nombre,$estacion,$cantidad,$valor_litro,$tipo_combustible,$valor);
      
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


