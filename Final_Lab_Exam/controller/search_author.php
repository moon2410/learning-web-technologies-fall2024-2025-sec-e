<?php
require_once ('../model/db.php');

$query = $_GET['q'];
$sql = "SELECT * FROM authors WHERE author_name LIKE '%$query%'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<div>" . $row['author_name'] . " - " . $row['contact_no'] . "</div>";
}
?>
