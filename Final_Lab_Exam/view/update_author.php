<?php
require_once ('../model/db.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM authors WHERE id = $id");
    $author = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $author_name = $_POST['author_name'];
    $contact_no = $_POST['contact_no'];
    $username = $_POST['username'];

    $sql = "UPDATE authors SET author_name = '$author_name', contact_no = '$contact_no', username = '$username' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Author updated successfully!";
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <h1>Update Author</h1>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $author['id']; ?>">
        <input type="text" name="author_name" value="<?php echo $author['author_name']; ?>" placeholder="Author Name" required>
        <input type="text" name="contact_no" value="<?php echo $author['contact_no']; ?>" placeholder="Contact No" required>
        <input type="text" name="username" value="<?php echo $author['username']; ?>" placeholder="Username" required>
        <button type="submit">Update Author</button>
    </form>
    <a href="dashboard.php">Back to Dashboard</a>
</body>
</html>
