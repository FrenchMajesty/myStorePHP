<?php
namespace Views;

use Core\Template;
use Model\Product;

class ProductListItem extends Template {

    public function __construct(Product $product) {
        $this->file = 'views/product-detail-cart.tpl';
        $this->values['name'] = $product->getName();
        $this->values['price'] = $product->getPrice();
        $this->values['thumbnail'] = $product->getThumbnail();
    }
}
 ?>
