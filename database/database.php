<?php 

date_default_timezone_set('Asia/Manila');

class Database {

    private $pdo;

    function __construct() {
        $this->pdo = new PDO(
            'mysql:host=localhost;dbname=admin-portal',
            'root',
            '',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    }

    // Return PDO object
    function opencon() {
        return $this->pdo;
    }

    // Fetch user by email
    function getUserByEmail($email) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function newUser($email, $hashedPassword) {
        $insert = $this->pdo->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        return $insert->execute([$email, $hashedPassword]);
    }


}
