<?php

include('../../connection/connection.php');

$count_users = "SELECT COUNT(vccorreo) FROM tblusuarios";
$result = mysqli_query($conn, $count_users);

$row = mysqli_fetch_array($result);

$count_rols = "SELECT COUNT(id) FROM tblroles_user";
$result_rols_count = mysqli_query($conn, $count_rols);
$row_rols = mysqli_fetch_array($result_rols_count);

$count_vehicular = "SELECT COUNT(id) FROM tblgestion_vehicular";
$result_vehicular = mysqli_query($conn, $count_vehicular);

$row_vehicular = mysqli_fetch_array($result_vehicular);


$count_combustible = "SELECT COUNT(id) FROM tblgasolina";
$result_combustible = mysqli_query($conn, $count_combustible);

$row_cmb = mysqli_fetch_array($result_combustible);
