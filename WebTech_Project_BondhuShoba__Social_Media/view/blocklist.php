<?php 
session_start();
require_once '../model/dbquery.php';
$result=get_blockList($_SESSION['user_id']);

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
        
        <div class="block-list">
            <div class="block-item">
                
                
            </div>
        </div>
        <h2>Blocked Lists</h2>
        <div class="blocked-list">
            <?php if($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) { 
                 $name=getUserName($row['f_id']);
                ?>
            <div class="blocked-item">
                <span><?php echo $name; ?></span>
                
                <form action="../controller/cmnController.php" method="post">
                    <input type="hidden" name="unblock" value="unblock">
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                    <input type="hidden" name="block_id" value="<?php echo $row['f_id']; ?>">
                    <button class="unblock">Unblock</button>
                </form>
            </div>
            <?php } 
            } else { ?>
                <div class="blocked-item">
                    <span>No blocked user</span>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>
