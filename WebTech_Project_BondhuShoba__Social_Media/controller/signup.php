<?php
session_start();
include_once "../model/config.php";

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = $_POST['password'];

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $checkQuery = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($result) > 0) {
            echo "$email - This email already exists!";
        } else {
            if (strlen($password) < 8) {
                echo "Password must be at least 8 characters long.";
            } elseif (!preg_match("/[0-9]/", $password)) {
                echo "Password must contain at least one number.";
            } elseif (!preg_match("/[!@#$%^&*(),.?\":{}|<>]/", $password)) {
                echo "Password must contain at least one special character.";
            } elseif (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
                $img_name = $_FILES['image']['name'];
                $img_type = $_FILES['image']['type'];
                $tmp_name = $_FILES['image']['tmp_name'];

                $allowed_extensions = ['jpeg', 'png', 'jpg'];
                $img_ext = strtolower(substr($img_name, strrpos($img_name, '.') + 1));
                $allowed_types = ["image/jpeg", "image/png", "image/jpg"];

                if (in_array($img_ext, $allowed_extensions) && in_array($img_type, $allowed_types)) {
                    $time = time();
                    $new_img_name = $time . "_" . uniqid() . "." . $img_ext;

                    if (move_uploaded_file($tmp_name, "images/" . $new_img_name)) {
                        $ran_id = rand(time(), 100000000);
                        $status = "Active now";
                        $encrypt_pass = password_hash($password, PASSWORD_DEFAULT);

                        $insertQuery = "INSERT INTO users (unique_id, fname, lname, email, password, img, status) 
                                        VALUES ('$ran_id', '$fname', '$lname', '$email', '$encrypt_pass', '$new_img_name', '$status')";

                        if (mysqli_query($conn, $insertQuery)) {
                            $_SESSION['unique_id'] = $ran_id;
                            echo "success";
                        } else {
                            echo "Something went wrong. Please try again!";
                        }
                    } else {
                        echo "Failed to upload image.";
                    }
                } else {
                    echo "Invalid image type or extension. Please upload a JPEG, PNG, or JPG file.";
                }
            } else {
                echo "Image is required or file upload error occurred.";
            }
        }
    } else {
        echo "$email is not a valid email!";
    }
} else {
    echo "All input fields are required!";
}
?>
