<?php 
session_start();

if(!isset($_SESSION['emis'])){
    header('location: login.php');
    exit;
}

?>