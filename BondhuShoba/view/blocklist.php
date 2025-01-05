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
            border-radius: 10px;
            margin-left: 5px;
            cursor: pointer;
        }
        .sidebar {
            width: 200px;
            border-radius: 10px;
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
            border-radius: 5px;
            margin-bottom: 10px;
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
        .block-list, .blocked-list {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .block-item, .blocked-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 0;
            border-bottom: 1px solid #eee;
        }
        .block-item:last-child, .blocked-item:last-child {
            border-bottom: none;
            
        }
        .block-item button, .blocked-item button {
            background-color: #3b5998;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .blocked-item .unblock {
            background-color: #f44336;
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
        <h2>Add user to block list</h2>
        <div class="block-list">
            <div class="block-item">
                <span>Username</span>
                <button>Block</button>
            </div>
        </div>
        <h2>Blocked Lists</h2>
        <div class="blocked-list">
            <div class="blocked-item">
                <span>Username</span>
                <button class="unblock">Unblock</button>
            </div>
            <div class="blocked-item">
                <span>Username</span>
                <button class="unblock">Unblock</button>
            </div>
            <div class="blocked-item">
                <span>Username</span>
                <button class="unblock">Unblock</button>
            </div>
        </div>
    </div>
</body>
</html>
