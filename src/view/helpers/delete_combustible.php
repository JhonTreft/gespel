<?php

include('../../connection/connection.php');
$id  = $_POST['id'];


$delete_combustible_id = "DELETE FROM tblgasolina WHERE id='$id'";
$result_ = mysqli_query($conn, $delete_combustible_id);

header('Location: ../admin/admin_user_main.php');


//Agregarle Notificaciones De Eliminado Correctamente