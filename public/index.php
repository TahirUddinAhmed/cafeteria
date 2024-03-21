<?php
// require 'view/index.view.php';
require '../helpers.php';

// routes and their corresponding actions 
$routes = [
    '/' => 'controllers/home.php',
    '/contact' => 'controllers/contact.php',
    '/error' => 'controllers/error/404.php'
];

$request = $_SERVER['REQUEST_URI'];

foreach($routes as $route => $action) {
    if($route === $request) {
        require basePath($action);
    } else {
        require basePath($route['/error']);
    }
}

