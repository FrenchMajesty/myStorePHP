<?php
class Product {

    private $prod_id;
    private $name;
    private $price;
    private $quantity;
    private $colors;
    private $size;
    private $prod_details;

    public function __construct($infos) {
        // if $infos is id then load from db
        // else create($infos)
    }

    public function update($newInfos) {
        // newInfos is assoc arrays of things to update
    }

    public function delete() {
        // Delete this object from db
    }

    public function amountInStock() {
        // return quantity available of product
    }

    private function generateID() {
        // create ID of length 6 and set it to this->id
    }

    private function uploadImages() {
        // when creating a new post
    }

    private function loadFromDB($id) {

    }

    private function create($infos) {
        // Loop over key and assign
        // save to db
    }

}
?>
