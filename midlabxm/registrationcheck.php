<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
   

    if (!isset($_SESSION['users'])) {
        $_SESSION['users'] = [];
    }

    $user_data = [
        'name' => $name,
        'email' => $email,
        'gender' => $gender,
        'date' => $date,
        'username' => $username,
        'password' => $password,
        'address' => $address
    ];

    $_SESSION['users'][$username] = $user_data;

    $_SESSION['user'] = $user_data;

    $_SESSION['status'] = true;

    header('Location: login.html');
    exit();
} else {
    echo "Invalid Request!";
}
?>