<?php
namespace Controller;

use Model\Product;
use Core\File;

class ProductController extends Controller {

    public function __construct() {

    }

    public function create(): bool {

        $this->errors = $this->validateSubmit();

        if(empty($this->errors)) {

            $prod = new Product();
                $prod->setName($this->form["name"]);
                $prod->setPrice($this->form["price"]);
                $prod->setInStock($this->form["quantity"]);
                $prod->setCategory($this->form["category"]);
                $prod->setImage($this->form["image"]->getUrl());
                $prod->setColorAvailable($this->form["colors"]);
                $prod->setSizeAvailable(explode(",", $this->form["size"]));

            $prod->save();
            return true;
        }

        return false;
    }

    public function delete($id): bool {
        $product = new Product($id);
        return $product->delete();
    }

    private function validateSubmit() {
        // Return errors if any

        $image = new File($_FILES["image"]);
        $name = $this->sanitize($_POST["name"]);
        $price = $this->sanitize($_POST["price"]);
        $quantity = $this->sanitize($_POST["quantity"]);
        $category = $this->sanitize($_POST["category"]);
        $size = $this->sanitize($_POST["size"]);

        // Figure out dynamic colors
        $customColors = array_keys($_POST, "on");
        foreach($customColors as $color) {
            preg_match("/-(\w+)/",$color,$match);
            $colors[] = $match[1];
        }

        if(!$this->verifyFormToken('product'))
            $errors[] = "Incorrect form submitted.";

        if($quantity < 0)
            $errors[] = "Quantity cannot be negative.";

        if(!is_numeric($price) || $price < 1)
            $errors[] = "Price must be a positive number.";

        if(!$image->isValidImage())
            $errors[] = "Image uploaded is invalid.";

        if($image->isValidImage() && !$image->uploadThumbnail())
            $errors[] = "There was an error uploading your image.";

        if($category != "men" && $category != "women")
            $errors[] = "Select a correct category for the product.";

        if(empty($name) || empty($price) || empty($quantity) || empty($size)
            || empty($category))
            $errors[] = "Product informations are incomplete.";

        if(!isset($errors)) {
            $this->form["name"] = $name;
            $this->form["price"] = $price;
            $this->form["quantity"] = $quantity;
            $this->form["category"] = $category;
            $this->form["size"] = $size;
            $this->form["colors"] = $colors;
            $this->form["image"] = $image;


            return null;
        }

        return $errors;
    }

}
?>
