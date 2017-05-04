<?php
namespace Views;

use Model\Product;
use Model\Cart;

class CartList extends Views {

    public function __construct() {

        $this->cart = $_SESSION['cart'] ?? null;

        if(!empty($this->cart)) {
            foreach($this->cart as $product) {
                $item = new CartItem($product);
                $this->value .= $item->output();
            }

        }else {
            $this->value = $this->stylize("Your cart is empty.");
        }

    }
}

 ?>
