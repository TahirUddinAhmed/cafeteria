<?php
// require 'view/index.view.php';
require '../helpers.php';

$routes = require basePath('routes.php');

$uri = $_SERVER['REQUEST_URI'];

require basePath('router.php');
