<?php
include '../db/connect.php';

session_start();
if(!empty($_SESSION['username'])){
    $porto = $_GET['porto'];
    $id = $_GET['id'];

    if($porto="photography"){
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
    }

}else{
    header("location:../index.php");
}

?>