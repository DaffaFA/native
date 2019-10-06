<?php

require_once './Http/Database/Database.php';

if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'Page';
    $action = 'Home';
}

require_once './Views/layout.php';