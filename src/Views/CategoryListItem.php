<?php
namespace Views;

use Model\Product;
use Core\Template;

class CategoryListItem extends Template {

    public function __construct(Product $product) {
        $this->file = 'views/cat-list-item.tpl';

        $this->values['name'] = $product->getName();
        $this->values['price'] = $product->getPrice();
        $this->values['thumbnail'] = $product->getThumbnail('250x250');
    }
}
?>
