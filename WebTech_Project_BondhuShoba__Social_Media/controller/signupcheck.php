<?php
    session_start();
    require_once '../model/dbquery.php';


    if(isset($_POST['signup']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $dob = $_POST['dob'];
        $gender= $_POST['gender'];
        echo $gender;
        
        if($password === $repassword)
        {
            $result = signup($name,$email,$password,$gender, $dob);
            if($result)
            {
                $_SESSION['message'] = "Signup Successfull";
                header('location: ../view/login.php');
            }
            else
            {
                $_SESSION['message'] = "Signup Failed";
                header('location: ../view/signup.php');
            }
        }
        else
        {
            $_SESSION['message'] = "Password and Repassword did not match";
            header('location: ../view/signup.php');
        }
    }
    else
    {
        header('location: ../view/signup.php');
    }

?>