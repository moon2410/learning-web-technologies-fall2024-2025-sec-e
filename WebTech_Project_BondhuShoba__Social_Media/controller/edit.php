<?php
session_start();
include_once "../model/config.php";

if(isset($_SESSION['unique_id'])){
    $unique_id = $_SESSION['unique_id'];
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    if(!empty($fname) && !empty($lname) && !empty($email)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $check_email_query = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND unique_id != '{$unique_id}'");
            if(mysqli_num_rows($check_email_query) > 0){
                echo "$email - This email already exists!";
            } else {
                $update_query = "UPDATE users SET fname='{$fname}', lname='{$lname}', email='{$email}'";
                
                if(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);
                    $extensions = ["jpeg", "png", "jpg"];
                    
                    if(in_array($img_ext, $extensions) && in_array($img_type, ["image/jpeg", "image/jpg", "image/png"])){
                        $time = time();
                        $new_img_name = $time.$img_name;
                        if(move_uploaded_file($tmp_name, "images/".$new_img_name)){
                            $update_query .= ", img='{$new_img_name}'";
                        } else {
                            echo "Failed to upload the image.";
                            exit;
                        }
                    } else {
                        echo "Please upload a valid image file - jpeg, png, jpg.";
                        exit;
                    }
                }

                $update_query .= " WHERE unique_id='{$unique_id}'";
                $update_result = mysqli_query($conn, $update_query);
                
                if($update_result){
                    echo "success";
                } else {
                    echo "Failed to update user information. Try again!";
                }
            }
        } else {
            echo "$email is not a valid email!";
        }
    } else {
        echo "All fields are required!";
    }
} else {
    echo "Session expired. Please log in again.";
}
?>
