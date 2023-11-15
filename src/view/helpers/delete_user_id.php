<?php

include('../../connection/connection.php');
$id  = $_POST['id'];


$delete_user_id = "DELETE FROM tblusuarios WHERE id='$id'";
$result_ = mysqli_query($conn, $delete_user_id);

header('Location: ../admin/admin_user_main.php');