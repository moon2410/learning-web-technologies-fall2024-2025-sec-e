<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bondhushobha</title>
</head>
<body>
    <h1>Create an account</h1>
    <form action="../controller/signupcheck.php" method="post">
        <input type="text" name="name" placeholder="Full Name"><br><br>
        <input type="date" name="dob" placeholder="Date of Birth"><br><br>
        Gender:
        <input type="radio" name="gender" value="Male"/> Male
        <input type="radio" name="gender" value="Female"/> Female
        <input type="radio" name="gender" value="Other"/> Other
        <br><br>
        <input type="text" name="email" placeholder="Email Address"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="password" name="repassword" placeholder="Confirm Password">
        <br><br>

        <input type="submit" name="signup" value="Sign Up">
    </form>
    <br>
    Already have an account? <a href="login.php">Login</a>
</body>
</html>