<?php
    function dbcon()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bondhushobha";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
?>