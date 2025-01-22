<?php
    session_start();
    require_once '../model/dbquery.php';

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(login($email, $password)){
           // $_SESSION['status'] = "Logged in";
            $_SESSION['user_id'] = getUserid($email);
            $_SESSION['user_name'] = getUserName(getUserid($email));
            header("location: ../view/userfeed.php");
        }
        else{
            echo "Login failed";
        }
    }
?>