<?php
// require 'view/index.view.php';
require '../helpers.php';

$routes = require basePath('routes.php');

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

inspact($uri);
inspact($method);

require basePath('router.php');
