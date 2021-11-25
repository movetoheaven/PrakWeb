<?php
    session_start();
    $uname = $_SESSION['username'];
    include '../db/connect.php';
    $user = $_POST['user'];

if(!empty($user)){
    if($user==$uname){
        header("location:setting.php?message=same");
    }else{
        $sql = "SELECT * FROM users WHERE username='$uname'";

        $select = $connection->query($sql);
        $row = $select->fetch_object();
        $dbimage = $row->images;

        $path_info = pathinfo("../images/users/$dbimage", PATHINFO_EXTENSION);
        rename("../images/users/$dbimage","../images/users/$user.$path_info");

        $sql = "UPDATE users SET username = '$user', images= '$user.$path_info' WHERE username = '$uname';";
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