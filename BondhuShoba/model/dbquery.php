<?php
require_once 'dbcon.php';

function signup($name, $email, $password, $gender, $dob)
{
    $conn = dbcon();
    $sql = "INSERT INTO user_info (name, email, password, gender, dob) VALUES ('$name', '$email', '$password', '$gender', '$dob')";
    $result = $conn->query($sql);
    return $result;
}

function login($email, $password)
{
    $conn = dbcon();
    $sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function get_user_info()
{
    $conn = dbcon();
    $sql = "SELECT * FROM user_info";
    $result = $conn->query($sql);
    return $result;
}

function get_user_info_by_email($email)
{
    $conn = dbcon();
    $sql = "SELECT * FROM user_info WHERE email = '$email'";
    $result = $conn->query($sql);
    return $result;
}
?>
