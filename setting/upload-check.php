<?php
    include '../db/connect.php';

    session_start();
    if(!empty($_SESSION['username'])){
        $user = $_SESSION['username'];
        $sql = "SELECT * FROM users where username='$user'";

        $query = $connection->query($sql);
        $row = $query->fetch_object();
        $dbimage = $row->images;

        if(isset($_POST['submit'])&&!empty($_FILES['upload']['name'])){
            $name = $_FILES['upload']['name'];
            $image = $_FILES['upload']['tmp_name'];
            $check = getimagesize($image);
            
            if($check!==$_FILES['upload']['tmp_name']){
                $ext = pathinfo($name, PATHINFO_EXTENSION);
                $newname = $user.".".$ext;
                $loc = "../images/users/";

                if($dbimage=="default"){
                    move_uploaded_file($image, $loc.$newname);
                    $sql = "UPDATE users SET images = '$newname' WHERE username = '$user';";
                    $upload = $connection->query($sql);
                    if($upload){
                        header("location:setting.php");
                    }
                }else{
                    unlink($loc.$dbimage);
                    move_uploaded_file($image, $loc.$newname);
                    $sql = "UPDATE users SET images = '$newname' WHERE username = '$user';";
                    $upload = $connection->query($sql);
                    if($upload){
                        header("location:setting.php");
                    }
                }
            }else{
                header("location:user-upload.php?message=invalid");
            }
        }else{
            header("location:user-upload.php?message=empty");
        }

        
    }else{
        header("location:../index.php");
    }



?>