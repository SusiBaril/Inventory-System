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

    function addCategory($categoryName){
        $insert = $this->pdo->prepare("INSERT INTO category (category_name) VALUES (?)");
        return $insert->execute([$categoryName]);
    }

    function getCategories(){
        $stmt = $this->pdo->query("SELECT category_id, category_name FROM category ORDER BY category_name");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function insertProduct($category_id, $product_name, $product_stock, $product_price){
        $insert = $this->pdo->prepare("INSERT INTO product (category_id, product_name, product_stock ,product_price) VALUES (?,?,?,?)");

        return $insert->execute([$category_id, $product_name, $product_stock, $product_price]);
    }
    
}
