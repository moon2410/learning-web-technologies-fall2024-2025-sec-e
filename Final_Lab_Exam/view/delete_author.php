<?php
require_once ('../model/db.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM authors WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Author deleted successfully!";
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    header("Location: dashboard.php");
    exit;
}
?>
