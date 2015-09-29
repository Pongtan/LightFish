<?php

namespace App\Controllers;

use Slim\Container;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

/**
 * BaseController
 */

class BaseController
{
    public function construct__(){

    }

    public function view(){
        // Create container
        $container = new Container;
        // Register component on container
        $container['view'] = function ($c) {
            $view = new Twig(BASE_PATH.'/view/', [
                'cache' => BASE_PATH.'/storage/framework/views'
            ]);
            $view->addExtension(new TwigExtension(
                $c['router'],
                $c['request']->getUri()
            ));

            return $view;
        };
    }
}