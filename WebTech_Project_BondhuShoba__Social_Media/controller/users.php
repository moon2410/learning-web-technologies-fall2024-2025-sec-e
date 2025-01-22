<?php
session_start();
include_once "../model/config.php";

$outgoing_id = $_SESSION['unique_id'];

$sql = "SELECT users.*, 
        (SELECT msg FROM messages 
         WHERE (incoming_msg_id = users.unique_id AND outgoing_msg_id = $outgoing_id) 
         OR (outgoing_msg_id = users.unique_id AND incoming_msg_id = $outgoing_id) 
         ORDER BY msg_id DESC LIMIT 1) AS last_message,
        (SELECT COUNT(*) FROM messages 
         WHERE incoming_msg_id = $outgoing_id 
         AND outgoing_msg_id = users.unique_id 
         AND is_read = 0) AS unread_count
        FROM users 
        WHERE NOT unique_id = $outgoing_id 
        ORDER BY 
          (SELECT msg_id FROM messages 
           WHERE (incoming_msg_id = users.unique_id AND outgoing_msg_id = $outgoing_id) 
           OR (outgoing_msg_id = users.unique_id AND incoming_msg_id = $outgoing_id) 
           ORDER BY msg_id DESC LIMIT 1) DESC";

$query = mysqli_query($conn, $sql);
$output = "";

if (mysqli_num_rows($query) == 0) {
    $output .= "No users are available to chat";
} else {
    include_once "data.php";
}

echo $output;
?>
