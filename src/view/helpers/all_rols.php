<?php

include('../../connection/connection.php');

$all_rols = "SELECT * FROM tblroles_user";
$result_query = mysqli_query($conn, $all_rols);


