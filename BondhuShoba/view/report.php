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
    <title>BondhuShobha - Report System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f5f5f5;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #3b5998;
            color: white;
        }
        .header input[type="text"] {
            width: 40%;
            padding: 5px;
            border-radius: 5px;
            border: none;
        }
        .header .options {
            display: flex;
            gap: 10px;
        }
        .header .options div {
            background-color: #dcdcdc;
            padding: 5px 10px;
            border-radius: 15px;
            cursor: pointer;
        }
        .main {
            display: flex;
            height: calc(100vh - 60px);
        }
        .sidebar {
            width: 20%;
            padding: 10px;
            background-color: #d9e3f0;
        }
        .sidebar button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: none;
            border-radius: 5px;
            background-color: #dcdcdc;
            cursor: pointer;
        }
        .content {
            width: 80%;
            padding: 20px;
        }
        .content h3 {
            margin: 0;
            margin-bottom: 10px;
        }
        .content .report-form {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        .report-form input[type="text"], .report-form select {
            padding: 10px;
            width: 40%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .report-form button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #3b5998;
            color: white;
            cursor: pointer;
        }
        .report-list {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            background-color: #ffffff;
        }
        .report-item {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
            border-bottom: 1px solid #ccc;
        }
        .report-item:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">BondhuShobha</div>
        <input type="text" placeholder="Search for friends">
        <div class="options">
            <div>Dark Mode</div>
            <div>Notification</div>
            <div>Profile</div>
        </div>
    </div>
    
    <div class="main">
        <div class="sidebar">
            <button><a href ="userfeed.php">Feeds</a></button>
            <button><a href="message.php">Message</a></button>
            <button><a href="friends.php">Friends</a></button>
        </div>
        
        <div class="content">
            <h3>Add user to Report</h3>
            <div class="report-form">
                <input type="text" placeholder="Username">
                <select>
                    <option>Purpose</option>
                    <option>Spam</option>
                    <option>Harassment</option>
                    <option>Inappropriate Content</option>
                </select>
                <button>Report</button>
            </div>
            
            <h3>Reports List</h3>
            <div class="report-list">
                <div class="report-item">
                    <span>Username</span>
                    <span>Reason</span>
                    <span>Reported</span>

                </div>
                <div class="report-item">
                    <span>Username</span>
                    <span>Reason</span>
                    <span>Reported</span>
                </div>
                <div class="report-item">
                    <span>Username</span>
                    <span>Reason</span>
                    <span>Reported</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
