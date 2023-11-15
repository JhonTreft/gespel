<?php
include('../../connection/connection.php');


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = mysqli_real_escape_string($conn, $_POST["id_rol"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $nombre_rol = mysqli_real_escape_string($conn, $_POST["name_rol"]);
    $estado = mysqli_real_escape_string($conn, $_POST["estado"]);
    

    $stmt = $conn->prepare("UPDATE tblroles_user SET vcnombre=?,vcdescripcion=?,  vcestado=? WHERE id=?");
    $stmt->bind_param("sssi", $nombre_rol,$desc,$estado, $id);
    echo $id;
      // Ejecutar la sentencia SQL
    $stmt->execute();
    $stmt->close();
    session_start();
    $_SESSION['message_title'] = "edit_success";
    $_SESSION['message_content'] = "Haz Editado Correctamente El Rol";

        // Redirigir al usuario a la página de lista de roles
    header("Location: ../admin/admin_user_main.php");
      
  }




 