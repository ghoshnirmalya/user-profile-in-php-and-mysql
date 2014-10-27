<?php
    session_start();
    require '_database/database.php';
    if($_SESSION['user_username']){
        header("location:home.php");
    }
?>