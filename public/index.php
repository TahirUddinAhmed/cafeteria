<?php
// require 'view/index.view.php';
require '../helpers.php';

// routes and their corresponding actions 
$routes = [
    '/' => 'controllers/home.php',
    '/contact' => 'controllers/contact.php',
    '404' => 'controllers/error/404.php'
];

$uri = $_SERVER['REQUEST_URI'];

// inspactAndDie($request);

// foreach($routes as $route => $action) {
//     // inspact($route);
//     $path = '';
//     if($route === $uri) {
//         $path = basePath($routes[$route]);
//     } 

//     if(file_exists($path)) {
//         require $path;
//     } 
// }

if(array_key_exists($uri, $routes)) {
    require basePath($routes[$uri]);
} else {
    require basePath($routes['404']);
}
