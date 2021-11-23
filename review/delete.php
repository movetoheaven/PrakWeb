<?php
include '../db/connect.php';

session_start();
if(!empty($_SESSION['username'])){
    $user = $_SESSION['username'];
    $reviewId = $_GET['id'];

    $sql = "DELETE FROM review WHERE reviewId=$reviewId;";
    $delete = $connection->query($sql);

    if($delete){
        header("location:review.php");
    }else{
        header("location:review.php?message=invalid");
    }
}else{
    echo "Need Login";
}

?>