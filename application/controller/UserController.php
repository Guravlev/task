<?php
include Q_PATH.'/application/core/view.php';
class UserController {

    public function ActionIndex() {
        $model = new UserModel();
        $view = new View();

        $view->users('user', $model->select_all());
    }
}