<?php
include '../db/connect.php';

$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
$query = $connection->query($sql);
$check = $query->num_rows;

if($check > 0){
    session_start();
    $_SESSION['username'] = $user;
    header("location:../homepage.php");
}else{
    header("location:login.php?message=invalid");
}

?>