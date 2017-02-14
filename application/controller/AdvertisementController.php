<?php
include Q_PATH.'/application/core/view.php';
class AdvertisementController{

    public function ActionIndex() {
        $advertisement = new AdvertisementModel();
        $view = new View();

        $view->advert('advertisement', $advertisement->select_all());
    }
}