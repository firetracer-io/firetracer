<?php
    $servername = "localhost";
    $username = "";
    $password = "";
    $database = "";
    
    try {
        $co = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {    
        echo "Connection failed: " . $e->getMessage();
    }
?>