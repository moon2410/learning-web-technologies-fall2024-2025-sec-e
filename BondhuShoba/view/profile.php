<?php
session_start();
require_once ('../model/dbquery.php');

    if(!isset($_SESSION['status'])){
        header('location: login.php');  
    }

$email = $_SESSION['user_email'];
$result = get_user_info_by_email($email);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BondhuShobha - Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #3b5998;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
        }
        .container {
            width: 50%;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile-section {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .profile-photo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }
        .profile-info {
            width: 70%;
        }
        .info-label {
            font-weight: bold;
            margin: 10px 0 5px;
        }
        .info-value {
            margin-bottom: 15px;
        }
        .button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #3b5998;
            color: white;
            cursor: pointer;
            margin-right: 10px;
            text-decoration: none;
        }
        .button:hover {
            background-color: #333;
        }
    </style>
</head>
<body>

    <div class="header">
        BondhuShobha
    </div>

    <div class="container">
        <div class="profile-section">
            <div class="profile-photo">
                photo
            </div>
            <div class="profile-info">
                <div class="info-label">Bio</div>
                <div class="info-value"><?= htmlspecialchars($user['bio'] ?? 'No bio provided'); ?></div>
                <div class="info-label">Name</div>
                <div class="info-value"><?= htmlspecialchars($user['name']); ?></div>
                <a href="editprofile.php" class="button">Edit Info</a>
            </div>
        </div>

        <div class="info-label">Email</div>
        <div class="info-value"><?= htmlspecialchars($user['email']); ?></div>

        <div class="info-label">Gender</div>
        <div class="info-value"><?= htmlspecialchars($user['gender']); ?></div>

        <div class="info-label">Date of Birth</div>
        <div class="info-value"><?= htmlspecialchars($user['dob']); ?></div>

        <a href="changepassword.php" class="button">Change Password</a>
        <a href="deleteaccount.php" class="button">Account Deactivate/Delete</a>
    </div>

</body>
</html>
