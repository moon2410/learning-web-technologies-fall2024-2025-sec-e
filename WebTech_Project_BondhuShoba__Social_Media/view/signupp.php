<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bondhushobha - Sign Up</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <form action="../controller/signupcheck.php" method="post">
        <h1>Create an account</h1>
        <input type="text" name="name" placeholder="Full Name">
        <input type="date" name="dob" placeholder="Date of Birth">
        <div class="radio-group">
            <label>Gender:</label>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other
        </div>
        <input type="text" name="email" placeholder="Email Address">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="repassword" placeholder="Confirm Password">
        <input type="submit" name="signup" value="Sign Up">
        <p>Already have an account? <a href="login.php">Login</a></p>
    </form>
</body>
</html>
