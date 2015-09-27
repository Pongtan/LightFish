<?php
use Slim\Slim;
$routes = new Slim();
$routes->get('/', 'HomeController:home');
$routes->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});
$routes->run();