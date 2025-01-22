<?php
header('Content-Type: application/json'); 

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$website = htmlspecialchars($_POST['website']);
$message = htmlspecialchars($_POST['message']);

$response = []; 

if (!empty($email) && !empty($message)) {
    $email_parts = explode('@', $email);
    if (count($email_parts) != 2 || empty($email_parts[0]) || empty($email_parts[1])) {
        $response['error'] = "Enter a valid email address!";
    } else {
        if (!empty($phone) && !ctype_digit($phone)) {
            $response['error'] = "Phone number should contain only numbers!";
        } elseif (!empty($website) && (strpos($website, "http://") === false && strpos($website, "https://") === false)) {
            $response['error'] = "Enter a valid website URL!";
        } else {
            $email_sanitized = str_replace(['@', '.', ','], '_', $email); 
            $unique_number = rand(100, 999999);
            $filename = '../contact_us/' . $email_sanitized . '_' . $unique_number . '.txt';

            $file_content = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage:\n$message\n\nRegards,\n$name";

            if (file_put_contents($filename, $file_content)) {
                $response['success'] = "Your message has been saved.";
            } else {
                $response['error'] = "Failed to save the message.";
            }
        }
    }
} else {
    $response['error'] = "Email and message fields are required!";
}

echo json_encode($response); 
?>
