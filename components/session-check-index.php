<?php
    session_start();
    require '_database/database.php';
    if(isset($_POST['username'])) { 
    // check if the username has been set
        header("location:home.php");
    }
?>
