<?php
require("../connection/connection.php");
require_once '../model/user.php';

class Register_Controller {
  private $model;
  private $conn;

  public function __construct($conn) {
    $this->model = new UserModel($conn);
    $this->conn = $conn;
  }

  public function handleRequest() {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $nombre = mysqli_real_escape_string($this->conn, $_POST["name"]);
      $correo = mysqli_real_escape_string($this->conn, $_POST["email"]);
      $contrasena1 = mysqli_real_escape_string($this->conn, $_POST['password']);
      $rol = mysqli_real_escape_string($this->conn, $_POST['rol']);
   

      $result = $this->model->registerModel($this->conn,$correo, $contrasena1,$rol,$nombre);

      if($result === true) {

        session_start();
        
   
        $_SESSION['message_title'] = "register_success";
        $_SESSION['message_content'] = "Haz Registrado Correctamente El Usuario";
    

        header('Location: ../view/admin/admin_user_main.php');
        exit();
      } else {
        $_SESSION['message_title_error'] = "register_error";
    
        $_SESSION['message_content_error'] = "El Usuario No Se Ha Registrado Correo Ya En Uso";
        header('Location: ../view/admin/admin_user_main.php');
      }
    }
  }
}
