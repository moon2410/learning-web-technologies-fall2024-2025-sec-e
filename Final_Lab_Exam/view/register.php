
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/style.css">
    <script src="../assets/script.js"></script>
</head>
<body>
    <h1> Registration for Our BlogSystem </h1><br>
    <form action="../controller/registercheck.php" method="POST" onsubmit="return validateForm();">
        <input type="text" id="author_name" name="author_name" placeholder="Author Name" required><br><br>
        <input type="text" id="contact_no" name="contact_no" placeholder="Contact No" required><br><br>
        <input type="text" id="username" name="username" placeholder="Username" required><br><br>
        <input type="password" id="password" name="password" placeholder="Password" required><br>
        <button type="submit">Register</button>
    </form>
    <br>
    Already have an account? <a href="login.php">Login</a>
</body>
</html>
