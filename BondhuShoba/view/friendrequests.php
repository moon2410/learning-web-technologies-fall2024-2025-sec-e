<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BondhuShobha</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #3b5998;
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        header .logo {
            font-size: 24px;
            font-weight: bold;
        }
        header input[type="text"] {
            width: 300px;
            padding: 8px;
            border: none;
            border-radius: 4px;
        }
        header .icons {
            display: flex;
            gap: 15px;
        }
        header .icons button {
            background-color: white;
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .main-content {
            display: flex;
            margin: 20px;
        }
        .sidebar {
            width: 200px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .sidebar button {
            padding: 10px;
            font-size: 16px;
            background-color: #ddd;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .sidebar button:hover {
            background-color: #ccc;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
        .content-section {
            margin-bottom: 20px;
        }
        .content-section h3 {
            margin-bottom: 10px;
        }
        .friend-row {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }
        .friend-row button {
            padding: 5px 10px;
            border: none;
            background-color: #ddd;
            border-radius: 5px;
            cursor: pointer;
        }
        .friend-row button:hover {
            background-color: #ccc;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">BondhuShobha</div>
        <input type="text" placeholder="Search for friends">
        <div class="icons">
            <button title="Dark Mode">🌙</button>
            <button title="Notification">🔔</button>
            <button title="Profile">👤</button>
        </div>
    </header>
    <div class="main-content">
        <div class="sidebar">
            <button>User Feed</button>
            <button>Messages</button>
            <button>Friends</button>
        </div>
        <div class="content">
            <div class="content-section">
                <h3>View Sent Friend Requests</h3>
                <div class="friend-row">
                    <span>Username</span>
                    <button>Cancel</button>
                </div>
            </div>
            <div class="content-section">
                <h3>View Received Friend Requests</h3>
                <div class="friend-row">
                    <span>Username</span>
                    <button>Accept</button>
                    <button>Reject</button>
                </div>
                <div class="friend-row">
                    <span>Username</span>
                    <button>Accept</button>
                    <button>Reject</button>
                </div>
                <div class="friend-row">
                    <span>Username</span>
                    <button>Accept</button>
                    <button>Reject</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
