<?php
namespace Core;

use PDO;

class Database {
	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $db_name = "store";
	private static $conn = NULL;

	public function getConnection() {

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
