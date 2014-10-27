<?php
    session_start();
    require '../_database/database.php';
    $user_username=$_SESSION['user_username'];
    if(isSet($_POST['user_username'])){
        if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
            die();
        }
        $username = $_POST['user_username'];
        $username = mysqli_real_escape_string($database,$username);
        $sql_check = mysqli_query($database,"SELECT user_username FROM user WHERE user_username='$username'");
        if(mysqli_num_rows($sql_check)){
            die('<div style="padding-top:5px;"></div><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" viewBox="0 0 16 16">
            <g>
            </g>
                <path d="M8 0c-4.418 0-8 3.582-8 8s3.582 8 8 8 8-3.582 8-8-3.582-8-8-8zM12 5.414l-2.586 2.586 2.586 2.586v1.414h-1.414l-2.586-2.586-2.586 2.586h-1.414v-1.414l2.586-2.586-2.586-2.586v-1.414h1.414l2.586 2.586 2.586-2.586h1.414v1.414z" fill="#333"></path>
            </svg> ');
        }
        else{
            die('<div style="padding-top:5px;"></div><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" viewBox="0 0 16 16">
            <g>
            </g>
                <path d="M8 0c-4.418 0-8 3.582-8 8s3.582 8 8 8 8-3.582 8-8-3.582-8-8-8zM6.5 13l-3.313-4.313 1.469-1.531 1.844 2.344 5.781-4.719 0.719 0.719-6.5 7.5z" fill="#333"></path>
            </svg> ');
        }
    }
?>