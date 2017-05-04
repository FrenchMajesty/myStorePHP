<?php
namespace Views;

use Model\Product;

class IndexSpotlight extends Views {
    private $allProducts;
    private $amount;

    public function __construct() {

        $load = new Product();
        $this->amount = 6;
        $this->allProducts = $load->loadRandom($this->amount);

        $this->value = $this->getHTML();
    }

    private function getHTML(): string {

        return'<div class="top">

		<div class="slideshow">
			<div id="slider">
                <a href="view/id"><img src="images/img1.png"></a>
                <a href="view/id"><img src="images/img2.png"></a>
                <a href="view/id"><img src="images/img3.png"></a>
			</div>
		</div>
		<div class="column">
			<div class="img">
			<a href="view/id"><img src="https://dummyimage.com/260x150/fff700/0011ff"></a>
			</div>
			<div class="img2">
			<a href="view/id"><img src="https://dummyimage.com/260x150/fff700/0011ff"></a>
			</div>
			<div class="img">
			<a href="view/id"><img src="https://dummyimage.com/260x150/fff700/0011ff"></a>
			</div>
		</div>

	</div>';
    }

}

?>
