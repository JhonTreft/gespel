<?php

include('../../connection/connection.php');
$id  = $_POST['id'];


$delete_gestion_id = "DELETE FROM tblgestion_vehicular WHERE id='$id'";
$result_ = mysqli_query($conn, $delete_gestion_id);

header('Location: ../admin/admin_user_main.php');