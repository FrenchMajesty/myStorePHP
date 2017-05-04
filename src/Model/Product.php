<?php
namespace Model;

use Core\Database;
use PDO;

class Product {
    private $id;
    private $name;
    private $price;
    private $category;
    private $thumbnail;
    private $thumbnails = [
        "270x180" => "https://dummyimage.com/270x180/fff700/0011ff",
        "250x250" => "https://dummyimage.com/250x250/fff700/0011ff",
        "150x150" => "https://dummyimage.com/150x150/fff700/0011ff"
    ];

    private $quantitySelected;
    private $colorSelected;
    private $sizeSelected;

    private $quantityInStock;
    private $colorAvailable;
    private $sizeAvailable;

    private $conn;

    public function __construct($id = null) {
        $db = new Database();
        $this->conn = $db->getConnection();

        if(is_numeric($id))
            $this->load($id);
    }

    public function setInStock(int $number) {
        $this->quantityInStock = $number;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function setPrice(int $price) {
        $this->price = $price;
    }

    public function setImage(string $imageLink) {
        $this->thumbnail = $imageLink;
    }

    public function setCategory(string $name) {
        $this->category = $name;
    }

    public function setColorAvailable(array $colors) {
        $this->colorAvailable = $colors;
    }

    public function setSizeAvailable(array $sizes) {
        $this->sizeAvailable = $sizes;
    }

    public function getID(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice() {
        return number_format($this->price, 2);
    }

    public function inStock(): int {
        return $this->quantityInStock;
    }

    public function getCategory(): string {
        return $this->category;
    }

    public function getColorSelected(): array {
        return $this->colorSelected;
    }

    public function getSizeSelected(): array {
        return $this->sizeSelected;
    }

    public function getTotalPrice(): double {
        $total = ($this->price * $this->quantitySelected);
        return number_format($total, 2);
    }

    public function getColorAvailable(): string {
        return join(",", $this->colorAvailable);
    }

    public function getSizeAvailable(): string {
        return join(",", $this->sizeAvailable);
    }

    public function getThumbnail(string $dimensions = "270x180"): string {
        return $this->thumbnails[$dimensions];
    }

    public function loadAll(): array {
        $allProducts = [];

        try  {
            $stmt = $this->conn->prepare("SELECT id FROM products");
            $stmt->execute();
            $product = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach($product as $entry) {
                $allProducts[] = new Product($entry["id"]);
            }

        }catch(PDOException $e) {
            echo $e->getMessage();
        }

        return $allProducts;
    }

    public function loadAllFromCategory(string $name): array {
        $allProducts = [];

        try  {
            $stmt = $this->conn->prepare("SELECT id FROM products WHERE category=:category");
            $stmt->bindParam(":category", $name);
            $stmt->execute();
            $product = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach($product as $entry) {
                $allProducts[] = new Product($entry["id"]);
            }

        }catch(PDOException $e) {
            echo $e->getMessage();
        }

        return $allProducts;
    }

    public function loadRandom(int $limit = 6): array {
        $randomProducts = [];

        try {
            $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $stmt = $this->conn->prepare("SELECT id FROM products ORDER BY RAND() LIMIT :max");
            $stmt->bindParam(":max", $limit);
            $stmt->execute();

            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach($products as $entry) {
                $randomProducts[] = new Product($entry["id"]);
            }

        }catch(PDOException $e) {
            echo $e->getMessage();
        }

        return $randomProducts;
    }

    public function getLatest(int $limit = 4): array {
        $newest = [];

        try {
            $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $stmt = $this->conn->prepare("SELECT id FROM products ORDER BY id DESC LIMIT :max");
            $stmt->bindParam(":max", $limit);
            $stmt->execute();

            $latest = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($latest as $product) {
                $newest[] = new Product($product["id"]);
            }

        }catch(PDOException $e) {
            echo $e->getMessage();
        }

        return $newest;
    }

    public function save() {

        try {
            $stmt = $this->conn->prepare("INSERT INTO products(name, price, image, inStock, color, category, size)
                                        VALUES(:name, :price, :image, :inStock, :color, :category, :size)");

            $stmt->bindParam(":name", $this->name);
            $stmt->bindParam(":price", $this->price);
            $stmt->bindParam(":image", $this->thumbnail);
            $stmt->bindParam(":inStock", $this->quantityInStock);
            $stmt->bindParam(":category", $this->category);
            @$stmt->bindParam(":color", join(",", $this->colorAvailable));
            @$stmt->bindParam(":size", join(",", $this->sizeAvailable));
            $stmt->execute();

        }catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function delete(): bool {

        try {
            $stmt = $this->conn->prepare("DELETE FROM products where id=:id");
            $stmt->bindParam(":id", $this->id);

            return $stmt->execute();

        }catch(PDOException $e) {
            $e->getMessage();
        }
    }

    private function load($id) {
        $this->id = $id;

        try {
            $stmt = $this->conn->prepare("SELECT * FROM products WHERE id=:id");
            $stmt->bindParam(":id", $this->id);
            $stmt->execute();

            $product = $stmt->fetch(PDO::FETCH_ASSOC);

            if($stmt->rowCount() == 1){

                $this->name = $product["name"];
                $this->price = $product["price"];
                $this->thumbnail = $product["image"];
                $this->category = $product["category"];
                $this->quantityInStock = $product["inStock"];
                $this->colorAvailable = explode(",", $product["color"]);
                $this->sizeAvailable = explode(",", $product["size"]);
            }

        }catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}
 ?>
