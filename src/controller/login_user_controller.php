<?php 

require_once '../model/user.php';
require_once '../connection/connection.php';

class Login_Controller{
  private $model;
  private $conn;

  public function __construct($conn) {
    $this->model = new UserModel($conn);
    $this->conn = $conn;
  }

  public function handleRequest() {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $correo = mysqli_real_escape_string($this->conn, $_POST["email"]);
      $contrasena = mysqli_real_escape_string($this->conn, $_POST["password"]);

      $result = $this->model->loginModel($this->conn,$correo, $contrasena);
      echo $result;
      echo $contrasena;

      //hacer esto mas logico las dos cosas renderizan lo mismo mi bro 
      //solo coloca una entonces
      
      if($result === true) {
        header('Location: ../view/main.php');
      } else {
        header('Location: ../view/login.php');
      }
    }
  }
}


