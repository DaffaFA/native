<?php


class Routes {
    public $controller;
    public $action;

    public function __construct()
    {
        if ( isset($_GET['controller']) && isset($_GET['action']) ) {
            $this->controller = $_GET['controller'];
            $this->action = $_GET['action'];
        } else {
            $this->controller = 'Page';
            $this->action = 'home';
        }
    }

    public function route()
    {
        require_once './Http/Controllers/'. $this->controller .'Controller.php';
        switch($this->controller) {
            case 'Page' :
                $controller = new PageController();
            break;
        }

        $controller->{$this->action}();
    }
}
