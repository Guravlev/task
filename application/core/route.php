<?php
class Route {

    function __construct() {

    }

    public static function Start() {
        $controller_name = 'Base';
        $action_name = 'Index';
        $action_parameters = array();

        $route_array = explode('/', $_SERVER['REQUEST_URI']);

        if(!empty($route_array[1])) {
            $controller_name = $route_array[1];
        }

        if(!empty($route_array[2])) {
            $action_name = $route_array[2];
        }

        $model_name = $controller_name . 'Model' ;
        $controller_name = $controller_name . 'Controller';
        $action_name = 'Action' . $action_name;

        if(file_exists(Q_PATH.'/application/models/'.$model_name.'.php')) {
            include Q_PATH.'/application/models/'.$model_name.'.php';
        }

        if(file_exists(Q_PATH.'/application/controller/'.$controller_name.'.php')) {
            include Q_PATH.'/application/controller/'.$controller_name.'.php';
        } else {
            header('Location: application/views/404.php');
            exit;
        }

        $controller = new $controller_name();
        $controller->$action_name();

    }

}