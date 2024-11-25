<?php
session_start();

if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header('Location: Login.html');
    exit();
}

$user = $_SESSION['user'];
?>

<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome, <?php echo $user['name']; ?>!</h1>

    <h2> Information:</h2>
    <ul>
        <li>Name: <?php echo $user['name']; ?></li>
        <li>Email: <?php echo $user['email']; ?></li>
        <li>Date of Birth: <?php echo $user['date']; ?></li>
        <li>Gender: <?php echo $user['gender']; ?></li>
        <li>Username: <?php echo $user['username']; ?></li>
        <li>Address: <?php echo $user['address']; ?></li>
    </ul>

    <form method="post" action="home.php">
        <button type="submit" name="logout">Logout</button>
    </form>

    <?php
    if (isset($_POST['logout'])) {
        unset($_SESSION['status']); 
        unset($_SESSION['user']);

        header('Location: login.html');
        exit();
    }
    ?>
</body>
</html>