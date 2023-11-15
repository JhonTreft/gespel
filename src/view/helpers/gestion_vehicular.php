<?php

include('../../connection/connection.php');

$all_gestion= "SELECT * FROM tblgestion_vehicular";
$result_gestion = mysqli_query($conn, $all_gestion);


$all_cmb= "SELECT * FROM tblgasolina";
$result_cmb = mysqli_query($conn, $all_cmb);

