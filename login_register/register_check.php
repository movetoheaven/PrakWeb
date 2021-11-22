<?php
include '../db/connect.php';
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];


if(!isset($user) | trim($user)=="" && !isset($email) | trim($email)=="" && !isset($pass) | trim($pass)==""){
    $sql = "INSERT INTO users (username, email, password) values ('$user', '$email', '$pass')";
    $insert = $connection->query($sql);

    if($insert){
        header("location:login.php");
    }else{
        header("location:register.php?message=invalid");
    }
}else{
    header("location:register.php?message=empty");
}

?>