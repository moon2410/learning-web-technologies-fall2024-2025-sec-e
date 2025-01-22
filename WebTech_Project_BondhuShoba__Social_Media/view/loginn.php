<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bondhushobha - Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <form action="../controller/logincheck.php" method="POST">
        <h1>Login</h1>
        <input type="text" name="email" placeholder="Email Address">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="login" value="Login">
        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
    </form>
</body>
</html>