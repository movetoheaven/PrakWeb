<?php
include '../db/connect.php';

session_start();
if(!empty($_SESSION['username'])){
    $user = $_SESSION['username'];
    $rating = $_POST['rating'];
    $message = $_POST['review'];

    $sql = "INSERT INTO review (username, message, rating) values ('$user', '$message', $rating)";
    $insert = $connection->query($sql);

    if($insert){
        header("location:review.php");
    }else{
        header("location:review.php?message=invalid");
    }
}else{
    echo "Need Login";
}

?>