<?php
require_once '../model/dbquery.php';
session_start();
$result = get_FriendList($_SESSION['user_id']);
?>
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

        .header .icons button:hover {
            background-color: #e4e4e4;
        }

        .sidebar {
            width: 200px;
            background-color: #f4f4f4;
            padding: 10px;
            position: fixed;
            top: 50px;
            bottom: 0;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            font-size: 16px;
            background-color: white;
            text-decoration: none;
            color: black;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 5px;
            text-align: center;
        }

        .sidebar a:hover {
            background-color: #ddd;
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
            background-color: white;
            width: 50%;
            padding: 10px;
            border-radius: 5px;
        }

        .friend-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
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

        .friend-item button:hover {
            background-color: #2e4474;
        }

        .friend-item .unfriend {
            background-color: #f44747;
        }

        .friend-item .unfriend:hover {
            background-color: #c63b3b;
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
            <button id="srcButton" name="srcSubmit" type="submit">Search</button>
        </form>
        <div class="icons">
            <button title="Dark Mode">🌙</button>
            <button title="Notification">🔔</button>
            <button title="Profile"><?php echo $_SESSION['user_name']; ?></button>
        </div>
    </div>
    <div class="sidebar">
        <a href="userfeed.php">User Feed</a>
        <a href="../users.php">Messages</a>
        <a href="friends.php">Friends</a>
    </div>
    <div class="content">
        <h2>Friend List</h2>
        <div class="friend-list">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $tmpResult = get_user_info_by_id($row['f_id']);
                    $tmprow = $tmpResult->fetch_assoc();
            ?>
                    <div class="friend-item">
                        <div>
                            <strong><?php echo $tmprow['name']; ?></strong>
                        </div>
                        <div style="display: flex; gap: 10px;">
                            <button class="message" title="Send a message to <?php echo $tmprow['name']; ?>">Message</button>
                            <form action="../controller/cmnController.php" method="post">
                                <input type="hidden" name="friendId" value="<?php echo $row['f_id']; ?>">
                                <input type="hidden" name="action" value="unfriend">
                                <button class="unfriend" name="unfriend" type="submit" title="Unfriend <?php echo $tmprow['name']; ?>">Unfriend</button>
                            </form>
                            <form action="../controller/cmnController.php" method="post">
                                <input type="hidden" name="friendId" value="<?php echo $row['f_id']; ?>">
                                <input type="hidden" name="action" value="block">
                                <button class="unfriend" name="block" type="submit" title="Block <?php echo $tmprow['name']; ?>">Block</button>
                            </form>
                        </div>
                    </div>
            <?php
                }
            } else {
            ?>
                <div>No friends found</div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>
