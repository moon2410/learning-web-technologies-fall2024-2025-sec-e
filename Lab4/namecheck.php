<<<<<<< HEAD
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
    $nameErr = "";
    $nameErw = "";
    $nameErl = "";
    $nameErc = "";

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
            $nameErw = "Name must contain at least two words";
        } elseif (!ctype_alpha($name[0])) {
            $nameErl = "Name must start with a letter";
        } else {
            foreach (str_split($name) as $char) {
                if (strpos("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.- ", $char) === false) {
                    $nameErc = "Invalid characters used";
                    break;
                }
            }
        }
    }

    if ($nameErr) {
       echo "Name Required <br> Box not be Empty "; 
      
    }    elseif ($nameErw) {
        echo "Name required minimum two word "; 
       
     }
     elseif ($nameErl) {
        echo "Name must be start with a letter"; 
       
     } 
     elseif ($nameErc) {
        echo " Must use proper character "; 
       
     }
    else {
        echo "Validation Successful";
        echo "Your name is: " .$name;
    }
}
?>
=======
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
    $nameErr = "";
    $nameErw = "";
    $nameErl = "";
    $nameErc = "";

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
            $nameErw = "Name must contain at least two words";
        } elseif (!ctype_alpha($name[0])) {
            $nameErl = "Name must start with a letter";
        } else {
            foreach (str_split($name) as $char) {
                if (strpos("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.- ", $char) === false) {
                    $nameErc = "Invalid characters used";
                    break;
                }
            }
        }
    }

    if ($nameErr) {
       echo "Name Required <br> Box not be Empty "; 
      
    }    elseif ($nameErw) {
        echo "Name required minimum two word "; 
       
     }
     elseif ($nameErl) {
        echo "Name must be start with a letter"; 
       
     } 
     elseif ($nameErc) {
        echo " Must use proper character "; 
       
     }
    else {
        echo "Validation Successful";
        echo "Your name is: " .$name;
    }
}
?>
>>>>>>> 1ae2817680135811e1a8e5945cc40ca851fea642
