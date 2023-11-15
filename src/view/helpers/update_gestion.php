<?php
include('../../connection/connection.php');


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = mysqli_real_escape_string($conn, $_POST["id_gestion"]);
    $nombre_ = mysqli_real_escape_string($conn, $_POST["name_gestion"]);
    $placa = mysqli_real_escape_string($conn, $_POST["placa"]);
    $kilometraje = mysqli_real_escape_string($conn, $_POST["kilometraje"]);

    echo $id." ".$nombre_." ".$placa." ".$kilometraje;
    

    if(!empty($nombre_) && !empty($placa) && !empty($kilometraje)){
        $stmt = $conn->prepare("UPDATE tblgestion_vehicular SET vcreporta=?,vcplaca=?, intkilometraje=? WHERE id=?");
        $stmt->bind_param("sssi", $nombre_,$placa,$kilometraje, $id);
        echo $id;
        // Ejecutar la sentencia SQL
        $stmt->execute();
        $stmt->close();

        session_start();
        $_SESSION['message_title'] = "edit_success";
        $_SESSION['message_content'] = "Edicion Exitosa";
    
        
        // Redirigir al usuario a la página de lista de Registros
        header("Location: ../admin/admin_user_main.php");
    }else{
        $_SESSION['message_title_error'] = "register_error";
    
        $_SESSION['message_content_error'] = "No Dejes Campos Vacios";
        header("Location: ../admin/admin_user_main.php");
    }

      
  }




 