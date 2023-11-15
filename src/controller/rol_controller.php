<?php
require("../connection/connection.php");
require_once '../model/rol.php';

class Rol_Controller {
  private $model;
  private $conn;

  public function __construct($conn) {
    $this->model = new RolModel($conn);
    $this->conn = $conn;
  }

  public function handleRequest() {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $nombre = mysqli_real_escape_string($this->conn, $_POST["name_rol"]);
      $desc = mysqli_real_escape_string($this->conn, $_POST["desc"]);
      $estado = mysqli_real_escape_string($this->conn, $_POST['estado']);
   

      $result = $this->model->Rol_User($this->conn,$nombre, $desc,$estado);

      if($result === true) {
        session_start();

        session_start();
        
   
        $_SESSION['message_title'] = "register_success";
        $_SESSION['message_content'] = "Haz Creado El Rol Perfectamente";
    
   
        header('Location: ../view/admin/admin_user_main.php');
      } else {

        $_SESSION['message_title_error'] = "register_error";
    
        $_SESSION['message_content_error'] = "Ha Ocurrido Un Error al crear el rol";
        header('Location: ../view/admin/admin_user_main.php');
      }
    }
  }
}
