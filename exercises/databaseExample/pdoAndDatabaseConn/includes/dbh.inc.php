<?php
//Connect to server
$dns = "mysql;host=localhost;dbname=myfirstdatabase";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dns, $dbusername, $dbpassword);
    // set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}