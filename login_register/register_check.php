<?php
include '../db/connect.php';
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];


if(!empty($user) && !empty($email) && !empty($pass)){
    $sql = "INSERT INTO users (username, email, password, images) values ('$user', '$email', '$pass', 'default')";
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