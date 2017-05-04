<?php
class Database {
    private $host = "127.0.0.1";
    private $username = "root";
    private $password = "";
    private $db_name = "store";
    private static $conn;

    public function dbConnection() {

        if(!self::$conn) {
            try {

                self::$conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";port=3306", $this->username, $this->password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }catch(PDOException $e) {
                echo "Connection error: " . $e->getMessage();
            }
        }

        return self::$conn;
    }

    public function runQuery($query) {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        return $stmt;
    }

    public function getRows($query) {
        try {

        $stmt = $this->conn->prepare($query);
        $stmt->execute();


        return $stmt->fetchAll(PDO::FETCH_ASSOC);

        }catch(PDOException $e) {
            $e->getMessage();
        }
    }
}
?>
