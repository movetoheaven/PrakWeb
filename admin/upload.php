<?php
include '../db/connect.php';

session_start();
if(!empty($_SESSION['username'])){
    $porto = $_GET['porto'];

    if($porto=="photography"){
        if(isset($_POST['submit'])&&!empty($_FILES['upload']['name'])){
            $name = $_FILES['upload']['name'];
            $image = $_FILES['upload']['tmp_name'];
            $check = getimagesize($image);
            
            if($check!==$_FILES['upload']['tmp_name']){
                $loc = "../images/photography/";

                if(file_exists($loc.$name)){
                    header("location:upload-photography.php?message=same");
                }else{
                    move_uploaded_file($image, $loc.$name);
                    $sql = "INSERT INTO photography (images) VALUES ('$name');";
                    $upload = $connection->query($sql);
                    if($upload){
                        header("location:upload-photography.php");
                    }
                }
            }else{
                header("location:upload-photography.php?message=invalid");
            }
        }else{
            header("location:upload-photography.php?message=empty");
        }
    }else if($porto=="web"){
        if(isset($_POST['submit'])&&!empty($_FILES['upload']['name'])){
            $name = $_FILES['upload']['name'];
            $image = $_FILES['upload']['tmp_name'];
            $check = getimagesize($image);
            
            if($check!==$_FILES['upload']['tmp_name']){
                $loc = "../images/web/";

                if(file_exists($loc.$name)){
                    header("location:upload-web.php?message=same");
                }else{
                    move_uploaded_file($image, $loc.$name);
                    $sql = "INSERT INTO web (images) VALUES ('$name');";
                    $upload = $connection->query($sql);
                    if($upload){
                        header("location:upload-web.php");
                    }
                }
            }else{
                header("location:upload-web.php?message=invalid");
            }
        }else{
            header("location:upload-web.php?message=empty");
        }
    }else if($porto=="android"){
        if(isset($_POST['submit'])&&!empty($_FILES['upload']['name'])){
            $name = $_FILES['upload']['name'];
            $image = $_FILES['upload']['tmp_name'];
            $check = getimagesize($image);
            
            if($check!==$_FILES['upload']['tmp_name']){
                $loc = "../images/android/";

                if(file_exists($loc.$name)){
                    header("location:upload-android.php?message=same");
                }else{
                    move_uploaded_file($image, $loc.$name);
                    $sql = "INSERT INTO android (images) VALUES ('$name');";
                    $upload = $connection->query($sql);
                    if($upload){
                        header("location:upload-android.php");
                    }
                }
            }else{
                header("location:upload-android.php?message=invalid");
            }
        }else{
            header("location:upload-android.php?message=empty");
        }
    }

}else{
    header("location:../index.php");
}

?>