<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (isset($_SESSION['users']) && isset($_SESSION['users'][$username])) {
        $user = $_SESSION['users'][$username];

        if ($user['password'] === $password) {
            $_SESSION['status'] = true;
            $_SESSION['user'] = $user;

            header('Location: home.php');
            exit();
        } else {
            echo "Invalid login  (incorrect password).";
        }
    } else {
        echo "Invalid login  (username not found).";
    }
}
?>