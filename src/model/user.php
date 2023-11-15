<?php

include("../connection/connection.php");

class UserModel {
  public function loginModel($conn,$correo, $contrasena) {
    $sql = "SELECT * FROM tblusuarios WHERE vccorreo=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();
    session_start();


    if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();

      if (password_verify($contrasena , $row['vccontrasena'])) {
        $_SESSION['user_email'] = $row['vccorreo'];
        $_SESSION["loggedin"] = true;
        $_SESSION["nombre"] = $row["vcnombre"];
        $_SESSION["rol"] = $row["vcrol"];
        return true;
      } else {
        $_SESSION['mensaje_login'] = "Contraseña incorrecta";
        return "Contraseña incorrecta";
      }
    } else {
      $_SESSION['mensaje_login'] = "Correo electronico no encontrado";
      return "Correo electrónico no encontrado";
    }
  }


  public function loginModelAdmin($conn,$correo, $contrasena) {
    $sql = "SELECT * FROM tblusuarios WHERE vccorreo=? AND vcrol='administrador'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();
    session_start();


    if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      echo $row['vccontrasena'];
      

      if (password_verify($contrasena , $row['vccontrasena'])) {
        
        $_SESSION['id'] = $row['id'];
        $_SESSION['user_admin_email'] = $row['vccorreo'];
        $_SESSION["loggedin_admin"] = true;
        return true;
      } else {
        $_SESSION['mensaje_login'] = "Contraseña incorrecta";
        return "Contraseña incorrecta";
      }
    } else {
      $_SESSION['mensaje_login'] = "Correo electronico o contraseña no encontrado";
      return "Correo electrónico no encontrado";
    }
  }


  public function registerModel($conn,$correo ,$contrasena,$rol,$nombre) {



     // Verificar si el correo electrónico ya está registrado
    $stmt = $conn->prepare("SELECT COUNT(*) FROM tblusuarios WHERE vccorreo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();


    if ($count > 0) {
      // El correo electrónico ya está registrado, no se puede registrar otro usuario con el mismo correo
      session_start();
      $_SESSION['mensaje_error'] ='Ese correo ya existe';
      return false;
    }else{
           $correo = mysqli_real_escape_string($conn, $correo);
           $contrasena_result = password_hash($contrasena, PASSWORD_BCRYPT);
           
           $stmt = $conn->prepare("INSERT INTO tblusuarios (vccorreo,vccontrasena,vcrol,vcnombre) VALUES (?,?,?,?)");
           $stmt->bind_param("ssss", $correo, $contrasena_result,$rol,$nombre);

          
           $stmt->execute();
           $stmt->close();


           return true;        
    }
}


}