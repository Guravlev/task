<?php
class View {

    function __construct() {

    }
    public function index($view,$data=array()) {
        include Q_PATH.'/application/views/index.php';
    }

    public function users($view,$data=array()) {
        include Q_PATH.'/application/views/user.php';
    }

    public function advert($view,$data=array()) {
        include Q_PATH.'/application/views/advertisement.php';
    }

}