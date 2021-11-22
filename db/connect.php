<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "fpweb";

    $connection = new mysqli($host, $username, $password, $database);

    if($connection->connect_error){
        die("Connect error: ". $connection->connect_error);
    }
    
?>