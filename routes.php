<?php

$router->get('/', 'controllers/home.php');
$router->get('/contact', 'controllers/contact.php');
$router->get('/booking/create', 'controllers/bookings/create.php');
$router->get('/admin', 'controllers/admin/home.php');
