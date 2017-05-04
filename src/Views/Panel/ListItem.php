<?php
namespace Views\Panel;

use Core\Template;
use Exception;

class ListItem extends Template {
        private $objName;

    public function __construct($object) {
        $this->file = 'views/panel/list-item.tpl';

        // Figure out object type
        $objectType = explode("\\",get_class($object));
        $this->objName = end($objectType);
        $this->item = $object;

        if($this->objName == "Product")
            $this->productListItem();
        else if($this->objName == "Order")
            $this->orderListItem();
        else if($this->objName == "User")
            $this->userListItem();
        else
            throw new Exception("Invalid Object type in ListItem", 1);

    }

    private function productListItem() {
        $this->values["item1"] = $this->imageTemplate($this->item->getThumbnail("150x150"));
        $this->values["item2"] = $this->item->getName();
        $this->values["item3"] = $this->item->getPrice();
        $this->values["item4"] = $this->item->inStock();
        $this->values["item5"] = $this->item->getColorAvailable();
        $this->values["editOptions"] = $this->editControls();
        $this->values["extra"] = $this->extraListCol($this->item->getCategory()) .
                                 $this->extraListCol($this->item->getSizeAvailable());
    }

    private function orderListItem() {
        $this->values["item1"] = $this->item->getClientID();
        $this->values["item2"] = $this->item->getPurchaseDate();
        $this->values["item3"] = $this->item->getPurchaseAmount();
        $this->values["item4"] = $this->item->getShipAddress();
        $this->values["item5"] = $this->item->getTransactionID();
        $this->values["editOptions"] = "";
        $this->values["extra"] = "";
    }

    private function userListItem() {
        $this->values["item1"] = $this->item->getID();
        $this->values["item2"] = $this->item->getEmail();
        $this->values["item3"] = $this->item->getRank();
        $this->values["item4"] = $this->item->getShipAddress();
        $this->values["item5"] = $this->item->getBillAddress();
        $this->values["editOptions"] = $this->editControls();
        $this->values["extra"] = "";
    }

    private function imageTemplate(string $url) {
        return "<img src={$url}>";
    }

    private function extraListCol(string $content, bool $centered = false) {
        return '<td' . ($centered ? 'class="center"' : '') . '>'.$content.'</td>';
    }

    private function editControls(): string {
        // <td><i class="fa fa-pencil" title="Edit"></i>
        return '<td><button class="fa fa-trash" title="Delete" data-id="'.$this->item->getID().'">
                </td>';
    }
}
?>
