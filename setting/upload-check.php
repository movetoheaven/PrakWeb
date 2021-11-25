<?php
    include '../db/connect.php';

    session_start();
    if(!empty($_SESSION['username'])){
        $user = $_SESSION['username'];
        $sql = "SELECT * FROM users where username='$user'";

        $query = $connection->query($sql);
        $row = $query->fetch_object();
        $dbimage = $row->images;

        if(isset($_FILES['file'])){
            $name = $_FILES['file']['name'];
            $image = $_FILES['file']['tmp_name'];
            $check = getimagesize($image);
            
            if($check!==$_FILES['upload']['tmp_name']){
                $newname = $user.".".$image;
                $loc = "../images/users/";

                if($dbimage=="default"){
                    move_uploaded_file($image, '');
                    $sql = "UPDATE users SET images = '$newname' WHERE username = '$user';";
                    $upload = $connection->query($sql);
                    if($upload){
                        header("location:setting.php");
                    }
                }else{
                    // rename
                }
            }else{
                header("location:user-upload.php?message=invalid");
            }
        }

        
    }else{
        header("location:../index.php");
    }



?>