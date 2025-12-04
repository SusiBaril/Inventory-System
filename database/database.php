<?php
$host = "localhost";   // XAMPP default
$dbname = "admin-portal"; 
$username = "root";    // XAMPP default
$password = "";        // empty password in XAMPP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
