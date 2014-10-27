<?php
    session_start();
    include '../_database/database.php';
    if(isset($_REQUEST['signup_button'])){
        $user_email=$_REQUEST['user_email'];
        $user_firstname=$_REQUEST['user_firstname'];
        $user_lastname=$_REQUEST['user_lastname'];
        $user_username=$_REQUEST['user_username'];
        $user_password=$_REQUEST['user_password'];
        $sql="INSERT INTO user(user_firstname,user_lastname,user_email,user_username,user_password,user_joindate,user_avatar) VALUES('$user_firstname','$user_lastname','$user_email','$user_username','$user_password',CURRENT_TIMESTAMP,'default.jpg')";
        mysqli_query($database,$sql) or die(mysqli_error($database));
        $_SESSION['user_username'] = $user_username;
        header('Location: ../update-profile-after-registration.php?user_username='.$user_username);
    }
?>