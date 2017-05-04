<?php
namespace Views;

use Model\Product;
use Model\Cart;

class CartList {
    private $cartList;

    public function __construct() {

        $this->cart = $_SESSION['cart'] ?? null;

        if(!empty($this->cart)) {
            foreach($this->cart as $product) {
                $item = new CartItem($product);
                $this->cartList .= $item->output();
            }

        }else {
            $this->cartList = $this->stylize("Your cart is empty.");
        }

    }

    public function value() {
        return $this->cartList;
    }

    private function stylize(string $text): string {
        return "<center><h4>" . $text . "</h4></center>";
    }
}

 ?>
