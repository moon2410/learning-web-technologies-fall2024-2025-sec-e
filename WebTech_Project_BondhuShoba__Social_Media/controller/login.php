<?php 
session_start();
include_once "../model/config.php";

$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


if (!empty($email) && !empty($password)) {

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter a valid email address!";
        exit;
    }

    if (strlen($password) < 8) {
        echo "Password must be at least 8 characters long!";
        exit;
    }

    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);


        if (password_verify($password, $row['password'])) {
            $status = "Active now";


            $sql2 = mysqli_query($conn, "UPDATE users SET status = '$status' WHERE unique_id = {$row['unique_id']}");
            if ($sql2) {
                $_SESSION['unique_id'] = $row['unique_id']; 
                echo "success"; 
            } else {
                echo "Failed to update status. Please try again!";
            }
        } else {
            echo "Email or Password is Incorrect!"; 
        }
    } else {
        echo "$email - This email does not exist!"; 
    }
} else {
    echo "All input fields are required!"; 
}
?>
