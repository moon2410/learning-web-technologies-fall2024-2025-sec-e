<?php
    session_start();
    require_once ('../model/dbquery.php');

    if (isset($_POST['signup'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $repassword = trim($_POST['repassword']);
        $dob = trim($_POST['dob']);
        $gender = trim($_POST['gender']);

        if (empty($name) || empty($email) || empty($password) || empty($repassword) || empty($dob) || empty($gender)) {
            $_SESSION['message'] = "All fields are required";
            header('location: ../view/signup.php');
            exit();
        }

        if ($password === $repassword) {

            $result = signup($name, $email, $password, $gender, $dob);
            if ($result) {
                $_SESSION['message'] = "Signup Successful";
                header('location: ../view/login.php');
            } else {
                $_SESSION['message'] = "Signup Failed. Please try again.";
                header('location: ../view/signup.php');
            }
        } else {
            $_SESSION['message'] = "Password and confirmation password do not match";
            header('location: ../view/signup.php');
        }
    } else {
        header('location: ../view/signup.php');
    }
?>
