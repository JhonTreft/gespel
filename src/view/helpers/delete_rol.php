<?php

include('../../connection/connection.php');
$id  = $_POST['id'];


$delete_rol_id = "DELETE FROM tblroles_user WHERE id='$id'";
$result_ = mysqli_query($conn, $delete_rol_id);

header('Location: ../admin/admin_user_main.php');