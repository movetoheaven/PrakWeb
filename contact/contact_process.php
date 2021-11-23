<?php
    include '../db/connect.php';
    session_start();
    
    $user = $_SESSION['username'];
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['Message'];

    if(!empty($_POST['Work']) && !empty($first) && !empty($last) && !empty($email) && !empty($subject) && !empty($message)) {
        $last_key = count($_POST['Work']);
        $i = 0;
        $input="";
        foreach($_POST['Work'] as $check) {
            if(++$i === $last_key){
                $input .= $check;
            }else{
                $input .= $check.", ";
            }
                
        }

        $sql = "INSERT INTO contact (username, firstName, lastName, email, subject, message, work) values ('$user','$first','$last','$email','$subject','$message', '$input')";

        $insert = $connection->query($sql);
        if($insert){
            header("location:../homepage.php");
        }else{
            echo "Error must login";
        }

    }
?>