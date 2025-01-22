<?php
session_start();

if (isset($_POST['darkMode'])) {
    $_SESSION['darkMode'] = $_POST['darkMode'] === 'true' ? true : false;
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid Request']);
}
?>
