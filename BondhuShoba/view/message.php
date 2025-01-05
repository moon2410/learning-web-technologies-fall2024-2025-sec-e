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
            background-color: #6a82c3;
            padding: 10px;
            color: white;
        }
        .chat-area {
            width: 60%;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border: 2px solid #c3c3c3;
            border-radius: 5px;
            margin: 10px;
            background-color: white;
        }
        .chat-area textarea {
            width: 100%;
            height: 80px;
            border-radius: 5px;
            border: 1px solid #c3c3c3;
            padding: 10px;
        }
        .chat-area .upload-send {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }
        .upload-send button, .upload-send input[type="file"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .upload-send button {
            background-color: #3b5998;
            color: white;
        }
        .user-profile {
            width: 20%;
            background-color: #d9e3f0;
            padding: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .user-profile img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .user-profile button {
            padding: 5px 10px;
            margin: 5px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .user-profile button:first-child {
            background-color: #3b5998;
            color: white;
        }
        .user-profile button:last-child {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">BondhuShobha</div>
        <input type="text" placeholder="Search for friends">
        <div class="options">
            <div>Dark Mode</div>
            <div><a href ="notification.php">Notification</a></div>
            <div>Profile</div>
        </div>
    </div>
    
    <div class="main">
        <div class="sidebar">
            <h2><a href ="userfeed.php">Feeds</a></h2>
            <h3>Chats</h3>
            <p>username</p>
            <p>username</p>
        </div>
        <div class="chat-area">
            <div class="chat-display" style="flex-grow: 1; background-color: #e0e0e0; border-radius: 5px; padding: 10px;"></div>
            <div class="upload-send">
                <input type="file" id="upload">
                <textarea placeholder="Text"></textarea>
                <button type="submit">Send</button>
            </div>
        </div>
        <div class="user-profile">
            <img src="https://via.placeholder.com/80" alt="User Photo">
            <h3>username</h3>
            <button>Settings</button>
            <button>Block</button>
        </div>
    </div>
</body>
</html>
