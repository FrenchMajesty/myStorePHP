<?php
namespace Model;

use Core\Database;
use Model\Product;
use PDO;

class Order {
    private $id;
    private $clientID;
    private $productID;
    private $purchaseDate;
    private $purchaseAmount;
    private $purchaseQuantity;
    private $purchaseOptions;
    private $shipAddress;
    private $billAddress;
    private $conn;


    public function __construct($id = null) {
        $db = new Database();
        $this->conn = $db->getConnection();
        $this->id = $id;

    }

    public function getTransactionID() {
        return $this->id;
    }

    public function getClientID() {
        return $this->clientID;
    }

    public function getPurchaseDate() {
        return $this->purchaseDate;
    }

    public function getPurchaseAmount() {
        return number_format($this->purchaseAmount,2);
    }

    public function getShipAddress() {
        return $this->shipAddress;
    }

    public function loadAll() {
        $orderList = [];

        try {

            $stmt = $this->conn->prepare("SELECT * FROM orders");
            $stmt->execute();

            $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($orders as $entry) {
                $orderList[] = new Order($entry["id"]);
            }

        }catch(PDOException $e) {
            echo $e->getMessage();
        }

        $orderList = [new Order(), new Order()];
        return $orderList;

    }

    public function getTopSelling(int $limit = 4): array {
        $topSelling = [];

        try {
            $stmt = $this->conn->prepare("SELECT product_id FROM orders");
            $stmt->execute();

            $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        if(count($orders) > 0) {

            $limit = (count($orders) < $limit) ? count($orders) : $limit;

            foreach($orders as $order) { // Count products sold
                $productID = $order["product_id"];

                if(!isset($topSelling[$productID]))
                    $topSelling[$productID] = 1;
                else
                    $topSelling[$productID]++;
            }
            arsort($topSelling);

            $result = array_keys(array_slice($topSelling, 0, $limit, true));
            foreach($result as $key => $productID) {
                $result[$key] = new Product($productID);
            }
        }

        return $result ?? Array();
    }

    private function load() {

        try {
            $stmt = $this->conn->prepare("SELECT * FROM orders WHERE id=:id");
            $stmt->bindParam(":id", $this->id);
            $stmt->execute();

            $order = $stmt->fetch(PDO::FETCH_ASSOC);

            if($stmt->rowCount() == 1) {

                $this->clientID = $order["user_id"];
                $this->productID = $order["product_id"];
                $this->purchaseDate= $order["purchase_date"];
                $this->purchaseAmount= $order["purchase_amount"];
                $this->purchaseQuantity= $order["purchase_quantity"];
                $this->purchaseOptions= $order["purchase_options"];
                $this->shipAddress= $order["ship_address"];
                $this->billAddress = $order["bill_address"];
            }

        }catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}
 ?>
