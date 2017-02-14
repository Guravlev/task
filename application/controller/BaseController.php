<?php
include Q_PATH.'/application/core/view.php';
class BaseController {

    public function ActionIndex() {
        $view = new View();

        $view->index('index');

    }
}