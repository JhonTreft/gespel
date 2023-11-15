<?php

include('../connection/connection.php');

class RolModel {
  public function Rol_User($conn,$nombre,$desc,$estado) {
    $nombre = mysqli_real_escape_string($conn, $nombre);
    $desc = mysqli_real_escape_string($conn, $desc);
    $estado = mysqli_real_escape_string($conn, $estado);

    $stmt = $conn->prepare("INSERT INTO tblroles_user (vcnombre,vcdescripcion,vcestado) VALUES (?,?,?)");
    $stmt->bind_param("sss",$nombre, $desc,$estado);

    $stmt->execute();
    $stmt->close();

    return True;
  }

}