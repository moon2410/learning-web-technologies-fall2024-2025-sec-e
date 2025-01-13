<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<h1> Login for Our BlogSystem </h1><br>
<h3>If you are Admin <a href="adminlogin.php">login</a></h3>
    <form action="../controller/logincheck.php" method="POST">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required> <br><br>
        <button type="submit">Login</button>
    </form>
    <br>
    
    <br>
    Don't have an account? <a href="register.php">Click Register</a>
</body>
</html>
