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
        }
        .header {
            background-color: #3b5998;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
        }
        .header input {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .header .icons button {
            background-color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            margin-left: 5px;
            cursor: pointer;
        }
        .sidebar {
            width: 200px;
            background-color: #f4f4f4;
            padding: 10px;
            position: fixed;
            top: 50px;
            bottom: 0;
        }
        .sidebar button {
            display: block;
            width: 100%;
            background-color: white;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 5px;
            cursor: pointer;
            text-align: left;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
        }
        .content h2 {
            margin-top: 0;
        }
        .friend-list {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
        }
        .friend-item {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
            border-bottom: 1px solid #eee;
        }
        .friend-item:last-child {
            border-bottom: none;
        }
        .friend-item button {
            background-color: #3b5998;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="header">
        <div>BondhuShobha</div>
        <input type="text" placeholder="Search for friends">
        <div class="icons">
            <button>Dark Mode</button>
            <button>Notification</button>
            <button>Profile</button>
        </div>
    </div>
    <div class="sidebar">
        <button>User Feed</button>
        <button>Messages</button>
        <button>Friends</button>
    </div>
    <div class="content">
        <h2>Username Found</h2>
        <p>Below matched usernames:</p>
        <div class="friend-list">
            <div class="friend-item">
                <span>Username</span>
                <button>Add Friend</button>
            </div>
            <div class="friend-item">
                <span>Username</span>
                <button>Add Friend</button>
            </div>
            <div class="friend-item">
                <span>Username</span>
                <button>Add Friend</button>
            </div>
        </div>
    </div>
</body>
</html>
