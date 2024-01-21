<?php
include('function.php');
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) && !empty($password)){
        header('location: login.php?err=1');
    }else if(!empty($username) && empty($password)){
        header('location: login.php?err=2');
    }else if(empty($username) && empty($password)){
        header('location: login.php?err=3');
    }else{
        $check_utilizador = select_table("v_utilizador WHERE emis='$username' and password='$password'");
        if(count($check_utilizador)>0){
            header('location: index.php');
        }else{
            header('location: login.php?err=4');
        }
    }

}else{
    header('location: login.php');
}
?>