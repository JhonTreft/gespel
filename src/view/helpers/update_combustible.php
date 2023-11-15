<?php
include('../../connection/connection.php');


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = mysqli_real_escape_string($conn, $_POST["id_cmb"]);
    $nombre_cmb = mysqli_real_escape_string($conn, $_POST["name_cmb"]);
    $placa_cmb = mysqli_real_escape_string($conn, $_POST["placa_cmb"]);
    $estacion = mysqli_real_escape_string($conn, $_POST["estacion"]);
    $cantidad = mysqli_real_escape_string($conn, $_POST["cantidad"]);
    $litro = mysqli_real_escape_string($conn, $_POST["litro"]);
    $tipo = mysqli_real_escape_string($conn, $_POST["tipo"]);
    $valor = mysqli_real_escape_string($conn, $_POST["valor"]);



    

    if(!empty($nombre_cmb) && !empty($placa_cmb) && !empty($estacion) && !empty($cantidad) && !empty($litro) && !empty($tipo) && !empty($valor)){
        $stmt = $conn->prepare("UPDATE tblgasolina SET vcreporta=?,vcplaca=?,vcestacion=?,dccantidad=?,dcvalor_litro=?,vctipo_combustible=?,dcvalor=? WHERE id=?");
        $stmt->bind_param("sssddsdi", $nombre_cmb,$placa_cmb,$estacion,$cantidad,$litro,$tipo,$valor, $id);
        
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




 