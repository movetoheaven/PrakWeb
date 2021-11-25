<?php
include '../db/connect.php';

session_start();
if(!empty($_SESSION['username'])){
    $porto = $_GET['porto'];
    $id = $_GET['id'];

    if($porto=="photography"){
        $loc = "../images/photography/";
        $sql = "SELECT * FROM photography WHERE photoId=$id;";
        $data = $connection->query($sql);
        $row = $data->fetch_object();
        $image = $row->images;

        $sql = "DELETE FROM photography WHERE photoId=$id;";
        $delete = $connection->query($sql);

        if($delete){
            unlink($loc.$image);
            header("location:upload-photography.php");
        }else{
            header("location:upload-photography.php?message=invalid");
        }
    }else if($porto=="web"){
        $loc = "../images/web/";
        $sql = "SELECT * FROM web WHERE webId=$id;";
        $data = $connection->query($sql);
        $row = $data->fetch_object();
        $image = $row->images;

        $sql = "DELETE FROM web WHERE webId=$id;";
        $delete = $connection->query($sql);

        if($delete){
            unlink($loc.$image);
            header("location:upload-web.php");
        }else{
            header("location:upload-web.php?message=invalid");
        }
    }else if($porto=="android"){
        $loc = "../images/android/";
        $sql = "SELECT * FROM android WHERE androidId=$id;";
        $data = $connection->query($sql);
        $row = $data->fetch_object();
        $image = $row->images;

        $sql = "DELETE FROM android WHERE androidId=$id;";
        $delete = $connection->query($sql);

        if($delete){
            unlink($loc.$image);
            header("location:upload-android.php");
        }else{
            header("location:upload-android.php?message=invalid");
        }
    }

}else{
    header("location:../index.php");
}

?>