<?php
    include '../db/connect.php';
    session_start();
    if(!empty($_SESSION['username'])){
        if($_SESSION['username']!="admin"){
            header("location:../index.php");
        }else{
            $id = $_GET['id'];
            $sql = "UPDATE contact SET progress = 'Completed' WHERE contactId = '$id';";

            $update = $connection->query($sql);

        if($update){
            header("location:contact-admin.php");
        }else{
            header("location:contact-admin.php?message=invalid");
        }


        }
    }else{
        header("location:../index.php");
    }
?>