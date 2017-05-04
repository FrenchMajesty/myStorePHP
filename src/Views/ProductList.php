<?php
namespace Views;

use Model\Product;
use Model\Order;

class ProductList extends Views {

    public function __construct(string $type) {

        $products = new Product();
        $orders = new Order();

        if(strtolower($type) == "top")
            $allProducts = $orders->getTopSelling(4);
        else if(strtolower($type) == "new")
            $allProducts = $products->getLatest(4);

        if(count($allProducts) > 0) {
            foreach($allProducts as $prod) {
                $tpl = new ProductListItem($prod);
                $this->value .= $tpl->output();
            }

        }else {
            $this->value = $this->stylize("There are no products.");
        }

    }

}
?>
