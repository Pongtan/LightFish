<?php

$app->get('/', 'App\Controllers\HomeController:home');
$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});
