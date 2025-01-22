<?php
session_start();

if (isset($_POST['color'])) {
    $_SESSION['chatColor'] = $_POST['color'];
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid Request']);
}
?>
