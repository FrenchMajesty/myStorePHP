<?php
namespace Views;

use Model\Product;
use Model\Order;

class ProductList{
    private $productList;

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
                $this->productList .= $tpl->output();
            }

        }else {
            $this->productList = $this->stylize("There are no products.");
        }

    }

    public function value() {
        return $this->productList;
    }

    private function stylize(string $text): string {
        return "<center><h4>" . $text . "</h4></center>";
    }
}
?>
