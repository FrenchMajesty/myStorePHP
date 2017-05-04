<?php
namespace Views\Panel;

use Core\Template;
use Model\Dashboard as ModelDashboard;

class Dashboard extends Template{

    public function __construct(ModelDashboard $data) {
        $this->file = 'views/panel/dashboard.tpl';

        $this->values['userCount'] = $data->getTotalUsers();
        $this->values['salesCount'] = $data->getTotalSales();
    }

}
 ?>
