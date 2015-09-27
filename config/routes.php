<?php
use Slim\Slim;
$routes = new Slim();
$routes->get('/', function () {
    echo "Hello World";
});
$routes->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});
$routes->run();