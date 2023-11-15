<?php

include('../../connection/connection.php');

$all_rols = "SELECT * FROM tblroles_user";
$result_rols = mysqli_query($conn, $all_rols);


$table_rols = "SELECT * FROM tblroles_user";
$result_table_rols = mysqli_query($conn, $table_rols);