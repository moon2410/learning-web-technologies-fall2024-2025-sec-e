<?php
require_once '../model/dbquery.php';
session_start();
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $src = htmlspecialchars($_GET['search']);
    $result = search_user($src);
} else {
    $result = null;
    $src = "";
}

if (isset($_SESSION['req_status'])) {
    if ($_SESSION['req_status'] == "Req sent") {
        $btnText = "Request Sent";
        unset($_SESSION['req_status']);
    } else {
        $btnText = "Add Friend";
        unset($_SESSION['req_status']);
    }
} else {
    $btnText = "Add Friend";
}

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
            padding: 10px;
            border-radius: 5px;
        }

        .friend-item {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            background-color: rgb(212, 212, 212);
            border-radius: 5px;
            margin-bottom: 5px;
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

        .friend-item button:disabled {
            background-color: grey;
            cursor: not-allowed;
        }
    </style>
</head>

<body>
    <div class="header">
        <div>BondhuShobha</div>
        <form action="../controller/cmnController.php" method="post">
            <input type="text" name="search" placeholder="Search for friends">
            <button id="srcButton" name="srcSubmit">Search</button>
        </form>
        <div class="icons">
            <button title="Dark Mode">🌙</button>
            <button title="Notification">🔔</button>
            <button title="Profile"><?php echo htmlspecialchars($_SESSION['user_name']); ?></button>
        </div>
    </div>
    <div class="sidebar">
        <button><a href="userfeed.php">User Feed</a></button>
        <button><a href="../users.php">Messages</a></button>
        <button><a href="friends.php">Friends</a></button>
    </div>
    <div class="content">
        <h2>Username Found</h2>
        <p>Below are the matched usernames:</p>
        <div class="friend-list">
                        <?php while ($row = $result->fetch_assoc()) {
                            if(!check_blockList($_SESSION['user_id'], $row['id'])) {
            
                            if (check_friendList($_SESSION['user_id'], $row['id'])) {
                        ?>
                                <div class="friend-item">
                                    <span><?php echo $row['name']; ?></span>
                                    <span><?php echo "Email: " . $row['email']; ?></span>
                                    <form action="../controller/cmnController.php" method="post">
                                        <input type="hidden" name="src" value="<?php echo $src; ?>">
                                        <input type="hidden" name="friendId" value="<?php echo $row['id']; ?>">
                                        <input type="hidden" name="action" value="unfrienD">
                                        <button name="SRCunfriend">Unfriend</button>
                                    </form>
                                </div>
            
                                <?php } else {
                                if (checkFriend($_SESSION['user_id'], $row['id'])) { ?>
                                    <div class="friend-item">
                                        <span><?php echo $row['name']; ?></span>
                                        <span><?php echo "Email: " . $row['email']; ?></span>
                                        <form action="../controller/cmnController.php" method="post">
                                            <input type="hidden" name="src" value="<?php echo $src; ?>">
                                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                                            <input type="hidden" name="friend_id" value="<?php echo $row['id']; ?>">
                                            <button name="addFriend">Request Sent</button>
                                        </form>
                                    </div>
                                <?php } else { ?>
                                    <div class="friend-item">
                                        <span><?php echo $row['name']; ?></span>
                                        <span><?php echo "Email: " . $row['email']; ?></span>
                                        <form action="../controller/cmnController.php" method="post">
                                            <input type="hidden" name="src" value="<?php echo $src; ?>">
                                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                                            <input type="hidden" name="friend_id" value="<?php echo $row['id']; ?>">
                                            <?php if($row['id'] == $_SESSION['user_id']) { ?>
                                                <button name="addFriend" disabled>Self</button>
                                            <?php } else { ?>
                                                <button name="addFriend">Add Friend</button>
                                            <?php } ?>
                                        </form>
                                    </div>
                        <?php }
                            }
                        } else {
                            if($result->num_rows == 1) {
                                header('location: ../view/userfeed.php?msg=No user found');
                            }
                         } } ?>
        </div>
    </div>
</body>

</html>