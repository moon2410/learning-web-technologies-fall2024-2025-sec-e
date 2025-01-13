<?php
session_start();

if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    header('Location: login.php'); 
    exit;
}

require_once('../model/db.php');

$sql = "SELECT * FROM authors";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/style.css">
    <script src="../assets/script.js"></script>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <a href="../controller/logout.php">Logout</a>
    
    <form>
        <input type="text" id="searchQuery" onkeyup="searchAuthor();" placeholder="Search Author">
    </form>

    <div id="searchResults">
        <?php if ($result->num_rows > 0) { ?>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div>
                    <strong><?php echo htmlspecialchars($row['author_name']); ?></strong> - <?php echo htmlspecialchars($row['contact_no']); ?>
                    <a href="update_author.php?id=<?php echo $row['id']; ?>">Update</a>
                    <a href="delete_author.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
                </div>
            <?php } ?>
        <?php } else { ?>
            <p>No authors found.</p>
        <?php } ?>
    </div>
</body>
</html>
