<?php
class User {
    private $id;
    private $email;
    private $password;
    private $rank = 1;
	private $full_name;
	private $full_ship_address;
	private $full_bill_address;
    private $conn;

    public function __construct($id = null) {

        $db = new Database();
        $this->conn = $db->dbConnection();
        $this->id = $id;

        if(!is_null($id))
            $this->loadUser();
    }

    public function login($email, $password) {
        try
		{
			$stmt = $this->conn->prepare("SELECT * FROM users WHERE email=:email");
            $stmt->bindparam(":email", $email);
			$stmt->execute();

			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1) {

				if($password == $userRow['password']) {
					$_SESSION['user_session'] = $userRow['id'];
					return true;
				}else {
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }

    public function logout() {
        session_destroy();
        unset($_SESSION["user_session"]);
    }

    public function register() {
        // Save to db

        try {
        //    $this->password = pasword_hash($this->password);

            $stmt = $this->conn->prepare("INSERT INTO users(email,password,`rank`, full_name, full_ship_address, full_bill_address)
                                        VALUES (:email, :password, :urank, :full_name, :full_ship_address, :full_bill_address)");

            $stmt->bindparam(":email", $this->email);
            $stmt->bindparam(":password", $this->password);
            $stmt->bindparam(":urank", $this->rank);
            $stmt->bindparam(":full_name", $this->full_name);
            $stmt->bindparam(":full_ship_address", $this->full_ship_address);
            $stmt->bindparam(":full_bill_address", $this->full_bill_address);

            $stmt->execute();

            return $stmt;
        }catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function doesUserExist($email) {

        try {
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE email= :email");
            $stmt->bindParam(":email", $email);

            $stmt->execute();
            $usersFound = $stmt->rowCount();

        }catch(PDOException $e) {
            echo $e-getMessage();
        }

        return ($usersFound > 0) ? true : false;
    }

    public function setInfo($infos) {
        // set properties
        foreach($infos as $field => $value) {
            $this->{$field} = $value;
        }
    }

    public function isAdmin() {
        if($this->rank > 1)
            return true;
        else
            return false;
    }

    public function isLoggedIn() {
        return isset($_SESSION["user_session"]) ? true : false;
    }

    public function redirectTo($url) {
        header("Location: $url");
    }


    private function loadUser() {
        // Retrieve from db
    }

}
?>
