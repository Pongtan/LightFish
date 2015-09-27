<?php

use Slim\Slim;
use App\Controllers;

$routes = new Slim();
$routes->get('/', 'App\Controllers\HomeController:home');
$routes->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});
$routes->run();