<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BondhuShobha - Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #3b5998;
            padding: 10px 20px;
            color: white;
        }
        .navbar input[type="text"] {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 200px;
        }
        .navbar .nav-buttons {
            display: flex;
            gap: 10px;
        }
        .nav-button {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            background-color: #ddd;
            cursor: pointer;
        }
        .main-container {
            text-align: center;
            padding: 50px 20px;
        }
        .main-container h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .main-container p {
            font-size: 18px;
            margin: 10px 0;
        }
        .footer {
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
            background-color: #ddd;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .footer button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #ccc;
            cursor: pointer;
        }
        .footer button:hover {
            background-color: #bbb;
        }
    </style>
</head>
<body>


    <div class="navbar">
        <div><strong>BondhuShobha</strong></div>
        <input type="text" placeholder="Search for friends">
        <div class="nav-buttons">
            <button class="nav-button">Dark Mode</button>
s
        </div>
    </div>


    <div class="main-container">
        <h1>Welcome to BondhuShobha</h1>
        <p><a href="view/login.php">Click Here For Login...</a></p>
        <p>If you Don't Have an Account Then <a href="view/signup.php">Click Here for SignUp</a></p>
    </div>


    <div class="footer">
        <button>About</button>
        <button>Rules & Regulations</button>
        <button><a href="view/suggestion.php">Suggestion Form</a></button>
    </div>

</body>
</html>
