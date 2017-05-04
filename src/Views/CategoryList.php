<?php
namespace Views;

use Model\Product;

class CategoryList extends Views {

    public function __construct(string $categoryName) {

        $load = new Product();
        $allProducts = $load->loadAllFromCategory($categoryName);

        if(count($allProducts) > 0) {
            foreach($allProducts as $prod) {
                $tpl = new CategoryListItem($prod);
                $this->value .= $tpl->output();
            }

        }else {
            $this->value = $this->stylize("There are no products in this category.");
        }

    }

}

?>
