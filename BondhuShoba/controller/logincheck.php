<?php
    session_start();
    require_once ('../model/dbquery.php');

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(login($email, $password)){
            $_SESSION['status'] = "Logged in";
            header("location: ../view/userfeed.php");
        }
        else{
            echo "Login failed";
        }
    }
?>