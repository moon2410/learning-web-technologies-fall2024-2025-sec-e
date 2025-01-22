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
        .followed-list {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
        }
        .followed-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 0;
            border-bottom: 1px solid #eee;
        }
        .followed-item:last-child {
            border-bottom: none;
        }
        .followed-item button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        a {
      color: inherit;
      text-decoration: none;
    }

    a:visited {
      color: inherit;
    
    }
    </style>
</head>
<body>
    <div class="header">
    <div class="logo">BondhuShobha</div>

<form action="../controller/cmnController.php" method="post">
    <input type="text" name="search" placeholder="Search for friends">
    <button id="srcButton" name="srcSubmit">Search</button>
</form>
        <div class="icons">
            <button title="Dark Mode">🌙</button>
            <button title="Notification">🔔</button>
            <button title="Profile">👤</button>
        </div>
    </div>
    <div class="sidebar">
            <button><a href="userfeed.php">User Feed</a></button>
            <button><a href="../users.php">Messages</button>
            <button><a href="friends.php">Friends</a></button>
    </div>
    <div class="content">
        <h2>Followed Lists</h2>
        <div class="followed-list">
            <!-- <div class="followed-item">
                <span>Username</span>
                <button>Unfollow</button>
            </div>
            <div class="followed-item">
                <span>Username</span>
                <button>Unfollow</button>
            </div>
            <div class="followed-item">
                <span>Username</span>
                <button>Unfollow</button> -->
            </div>
        </div>
    </div>
</body>
</html>
