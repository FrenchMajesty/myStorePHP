<?php
namespace Views;

use Core\Template;
use Model\Product;

class CartItem extends Template {

    public function __construct(Product $product) {
        $this->file = 'views/cart-item.tpl';

        $this->values['thumbnail'] = $product->getThumbnail("150x150");
        $this->values["quantity"] = $product->getQuantitySelected();
        $this->values["price"] = $product->getTotalPrice();
        $this->values["color"] = join(',', $product->getColorSelected());
        $this->values["size"] = join(',', $product->getSizeSelected());
    }
}
 ?>
