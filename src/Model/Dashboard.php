<?php
namespace Model;

use Core\Database;

class Dashboard {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getTotalUsers(): int {
        try {
            $stmt = $this->conn->prepare("SELECT id FROM users");
            $stmt->execute();

        }catch(PDOException $e) {
            echo $e->getMessage();
        }

        return $stmt->rowCount();
    }

    public function getTotalSales(): int {
        try {
            $stmt = $this->conn->prepare("SELECT id FROM orders");
            $stmt->execute();

        }catch(PDOException $e) {
            echo $e->getMessage();
        }

        return $stmt->rowCount();
    }
}

 ?>
