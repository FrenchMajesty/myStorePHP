<?php
namespace Views\Panel;

use Model\Product;
use Model\Order;
use Model\User;

use Exception;

class PanelList {
    private $value;

    public function __construct(string $type) {

        if($type == "product") $load = new Product();
        else if($type == "order") $load = new Order();
        else if($type == "user") $load = new User();
        else throw new Exception("Unaccepted List Type passed in PanelList", 1);


        $list = $load->loadAll();

        if(count($list) > 0) {
            foreach($list as $item) {
                $tpl = new ListItem($item);
                $this->value .= $tpl->output();
            }

        }else {
            $this->value = $this->stylize("There are no {$type} to see.");
        }
    }

    public function value(){
        return $this->value;
    }

    private function stylize(string $text): string {
        return "<center><h4>" . $text . "</h4></center>";
    }
}
 ?>
