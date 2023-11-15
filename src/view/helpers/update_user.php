<?php
include('../../connection/connection.php');


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $correo = mysqli_real_escape_string($conn, $_POST["email"]);
    $nombre = mysqli_real_escape_string($conn, $_POST["name"]);
    $contrasena = mysqli_real_escape_string($conn, $_POST["password"]);
    $rol = mysqli_real_escape_string($conn, $_POST["rol"]);
    
    echo $contrasena;

    
// Validar los datos
if (empty($nombre) && empty($correo)) {
    // Si alguno de los campos requeridos está vacío, mostrar un error
    echo "Por favor, completa los campos requeridos.";
  } else {

    // Si los campos están completos, actualizar los datos del usuario en la base de datos
    // Primero, hashear la contraseña si se proporcionó una nueva contraseña
    if (!empty($contrasena)) {
        $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE tblusuarios SET vccorreo=?, vccontrasena=?, vcnombre=? WHERE id=?");
        $stmt->bind_param("sssi", $correo, $hashed_password, $nombre, $id);
      } else {
        if(!empty($rol))
        {
            $stmt = $conn->prepare("UPDATE tblusuarios SET vccorreo=?, vcrol=?, vcnombre=? WHERE id=?");
            $stmt->bind_param("sssi", $correo, $rol, $nombre, $id);
        }else{
            $stmt = $conn->prepare("UPDATE tblusuarios SET vcnombre=?,  vccorreo=? WHERE id=?");
            $stmt->bind_param("ssi", $nombre, $correo, $id);
        }

      }
      
      // Ejecutar la sentencia SQL
      $stmt->execute();
      $stmt->close();
      
      session_start();
      $_SESSION['message_title'] = "edit_success";
      $_SESSION['message_content'] = "Haz Editado Correctamente El Usuario";
  
    // Redirigir al usuario a la página de lista de usuarios
    header("Location: ../admin/admin_user_main.php");
  }
}




 