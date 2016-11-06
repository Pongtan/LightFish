<?php

/***
 * Pontan Framework Bootstrap
 * @author orvice
 * @email pongtan@orx.me
 * @url https://github.com/Pongtan/LightFish
 */
//  BASE_PATH
define('BASE_PATH', __DIR__ . '/../');
$basePath = realpath(__DIR__ . '/../');
require BASE_PATH . '/vendor/autoload.php';

/**
 * New App
 */
$app = new \Pongtan\App($basePath);

/**
 * Register Config
 */
$app->registerConfig();

require $basePath . "/routes/web.php";
return $app;
