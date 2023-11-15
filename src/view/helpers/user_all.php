<?php

include('../../connection/connection.php');

$users_all = "SELECT * FROM tblusuarios WHERE vccorreo != '" . mysqli_real_escape_string($conn, $_SESSION['user_admin_email']) . "'";

//$users_all = "SELECT * FROM tblusuarios";
$result=mysqli_query($conn,$users_all);

