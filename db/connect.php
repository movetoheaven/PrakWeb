<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "finalproject";

    $connection = new mysqli($host, $username, $password, $database);

    if($connection->connect_error){
        die("Maaf koneksi gagal: ". $connection->connect_error);
    }
    
?>