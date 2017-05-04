<?php
namespace Views;

use Model\Product;

class CategoryList {

    private $categoryList;

    public function __construct(string $categoryName) {

        $load = new Product();
        $allProducts = $load->loadAllFromCategory($categoryName);

        if(count($allProducts) > 0) {
            foreach($allProducts as $prod) {
                $tpl = new CategoryListItem($prod);
                $this->categoryList .= $tpl->output();
            }

        }else {
            $this->categoryList = $this->stylize("There are no products in this category.");
        }

    }

    public function value(): string {
        return $this->categoryList;
    }

    private function stylize(string $text): string {
        return "<center><h4>" . $text . "</h4></center>";
    }
}

?>
