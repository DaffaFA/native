<?php

class PageController {
    public function home()
    {
        require_once './Views/Display/home.php';
    }

    public function login()
    {
        require_once './Views/Display/Auth/login.php';
    }

    public function register()
    {
        require_once './Views/Display/Auth/register.php';
    }

    public function welcome()
    {
        require_once './Views/Display/welcome.php';
    }
}