<?php
    $loc = $_GET['message'];
    session_start();
    session_destroy();
    header("location:$loc.php");
?>