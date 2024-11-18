<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
    $emailErr = "";
    $emailErf = "";

    if (empty($email)) {
        $emailErr = "Email is required";
    }
    elseif (strpos($email, '@') === false || strpos($email, '.') === false || !ctype_alpha($email[0])) {
        $emailErr = "Invalid email format";
    }

    if ($emailErr) {
        echo"Invalid Email Format <br> Use like sample@exmaple.com" ;
            }
        else {
       echo "Validation Successful";
        echo "Your email is: " . $email ;
    }
}
?>
