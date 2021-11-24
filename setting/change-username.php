<?php
    session_start();
    $uname = $_SESSION['username'];
    include '../db/connect.php';
    $user = $_POST['user'];

if(!empty($user)){
    if($user==$uname){
        header("location:setting.php?message=same");
    }else{
        $sql = "UPDATE users SET username = '$user' WHERE username = '$uname';";
        $update = $connection->query($sql);

        if($update){
            session_destroy();
            header("location:../login_register/login.php");
        }else{
            header("location:setting.php?message=invalid");
        }
    }
}else{
    header("location:setting.php?message=empty");
}

?>