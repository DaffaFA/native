<?php

class Routes {
    public $controller;
    public $action;

    public function __construct()
    {
        if ( isset($_GET['controller']) ) {
            $this->controller = $_GET['controller'];
        } else {
            $this->controller = 'Page';
        }
    }

    public function route()
    {
        switch($this->controller) {
            case 'Page' :
                echo "jalan anjing";
            break;
            case 'dunno' :
                echo "lawak lo badut";
            break;
        }
    }
}
