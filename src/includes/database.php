<?php
    $servername = "localhost";
    $username = getenv("DATABASE_USERNAME");
    $password = getenv("DATABASE_PASSWORD");
    $database = "";
    
    try {
        $co = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {    
        echo "Connection failed: " . $e->getMessage();
    }
?>
