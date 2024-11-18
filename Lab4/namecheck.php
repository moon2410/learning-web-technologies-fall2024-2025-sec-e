<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
    $nameErr = "";

    if ($name == "") {
        $nameErr = "Name is required";
    } else {
        $words = explode(" ", $name);
        $wordCount = 0;
        foreach ($words as $word) {
            if ($word !== "") {
                $wordCount++;
            }
        }

        if ($wordCount < 2) {
            $nameErr = "Name must contain at least two words";
        } elseif (!ctype_alpha($name[0])) {
            $nameErr = "Name must start with a letter";
        } else {
            foreach (str_split($name) as $char) {
                if (strpos("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.- ", $char) === false) {
                    $nameErr = "Invalid characters used";
                    break;
                }
            }
        }
    }

    if ($nameErr) {
       echo "Invalid <br> Required Proper Name"; 
      
    } else {
        echo "Validation Successful";
        echo "Your name is: " .$name;
    }
}
?>
