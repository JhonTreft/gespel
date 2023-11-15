<?php
session_start();

if(!$_SESSION["loggedin_admin"]){
    header('Location: ../login.php');
}