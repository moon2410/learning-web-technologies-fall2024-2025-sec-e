<?php
require_once ('../model/db.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $author_name = $_POST['author_name'];
    $contact_no = $_POST['contact_no'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO authors (author_name, contact_no, username, password) VALUES ('$author_name', '$contact_no', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Author added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/style.css">
    <script src="../assets/script.js"></script>
</head>
<body>
    <h1>Add New Author</h1>
    <form method="POST" onsubmit="return validateForm();">
        <input type="text" id="author_name" name="author_name" placeholder="Author Name" required>
        <input type="text" id="contact_no" name="contact_no" placeholder="Contact No" required>
        <input type="text" id="username" name="username" placeholder="Username" required>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <button type="submit">Add Author</button>
    </form>
    <a href="dashboard.php">Back to Dashboard</a>
</body>
</html>
