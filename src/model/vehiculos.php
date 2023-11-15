<?php

include('../connection/connection.php');

class VehiculosModel {
  public function gestionVehicular($conn,$nombre,$placa,$kilometraje) {
    $nombre = mysqli_real_escape_string($conn, $nombre);
    $placa = mysqli_real_escape_string($conn, $placa);
    $kilometraje = mysqli_real_escape_string($conn, $kilometraje);
    date_default_timezone_set('America/Lima');

    $fecha_ = date('Y-m-d-H:i:s');
    $stmt = $conn->prepare("INSERT INTO tblgestion_vehicular (dtfecha_reporte,vcreporta,vcplaca,intkilometraje) VALUES (?,?,?,?)");
    $stmt->bind_param("sssi",$fecha_ ,$nombre, $placa,$kilometraje);

    $stmt->execute();
    $stmt->close();

    return True;
  }

  public function gasolina($conn,$placa,$nombre,$estacion,$cantidad,$valor_litro,$tipo_combustible,$valor) {
    $nombre = mysqli_real_escape_string($conn, $nombre);
    $estacion = mysqli_real_escape_string($conn, $estacion);
    $placa = mysqli_real_escape_string($conn, $placa);
    $cantidad = mysqli_real_escape_string($conn, $cantidad);
    $valor_litro = mysqli_real_escape_string($conn, $valor_litro);
    $tipo_combustible = mysqli_real_escape_string($conn, $tipo_combustible);
    $valor = mysqli_real_escape_string($conn, $valor);
    date_default_timezone_set('America/Lima');

    $fecha_sl = date('Y-m-d-H:i:s');
 
    $stmt = $conn->prepare("INSERT INTO tblgasolina (dtfecha_reporte,vcplaca,vcreporta,vcestacion,dccantidad,dcvalor_litro,vctipo_combustible,dcvalor) VALUES (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssddsd", $fecha_sl,$placa,$nombre,$estacion,$cantidad,$valor_litro,$tipo_combustible,$valor);

    $stmt->execute();
    $stmt->close();

    return True;
  }

}