<?php
session_start();
require_once '../model/dbquery.php';
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications (4/5)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #3b5998;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar input {
            padding: 5px;
            width: 300px;
            border-radius: 5px;
            border: none;
        }
        .navbar a {
            margin-left: 10px;
            padding: 5px 10px;
            background-color: #ddd;
            color: black;
            text-decoration: none;
            border-radius: 5px;
        }
        .sidebar {
            width: 200px;
            background-color: #f1f1f1;
            padding: 20px;
            height: 100vh;
            position: fixed;
        }
        .sidebar button {
            display: block;
            margin: 10px 0;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
        }
        .notification-container {
            background-color: #e7f3ff;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
        }
        .notification-item {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .all-notifications-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #ddd;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            width: 200px;
        }
        .all-notifications-button a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <span>BondhuShobha</span>
        <input type="text" placeholder="Search for friends">
        <div>
            <a href="#">Notification</a>
            <a href="#">Dark Mode</a>
            <a href="#">Profile</a>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <button>User Feed</button>
        <button>Messages</button>
        <button>Friends</button>
    </div>

    <!-- Content Section -->
    <div class="content">
        <h2>Notifications</h2>
        <div class="notification-container">
            <div class="notification-item">
                <span>Notification 1</span>
                <button>Delete</button>
            </div>
            <div class="notification-item">
                <span>Notification 2</span>
                <button>Delete</button>
            </div>
            <div class="notification-item">
                <span>Notification 3</span>
                <button>Delete</button>
            </div>
            <div class="notification-item">
                <span>Notification 4</span>
                <button>Delete</button>
            </div>
        </div>

        <!-- Button to go to All Notifications Page -->
        <div class="all-notification-button">
            <a href="all_notification.php">All Notifications</a>
        </div>
    </div>

</body>
</html>
