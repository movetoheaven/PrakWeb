<?php 
    include '../db/connect.php';
    session_start();
    if(!empty($_SESSION['username'])){
        $old = $_POST['old-pass'];
        $new = $_POST['new-pass'];
        $confirmNew = $_POST['confirm-new-pass'];
        $user = $_SESSION['username'];

        if(!empty($old) && !empty($new) && !empty($confirmNew)){
            $sql = "SELECT * FROM users WHERE username = '$user'";
            $query = $connection->query($sql);
            $row = $query->fetch_object();

            $pass = $row->password;

            if($new==$confirmNew && $old==$pass){
                $update= "UPDATE users SET password = '$new' WHERE username = '$user';";
                $change = $connection->query($update);

                if($change){
                    session_destroy();
                    header("location:../login_register/login.php");
                }else{
                    header("location:change-password.php?message=invalid");
                }
            }else{
                header("location:change-password.php?message=invalid");
            }
        }else{
            header("location:change-password.php?message=empty");
        }
    }else{
        header("location:../homepage.php");
    }

?>