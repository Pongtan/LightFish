<?php

namespace App\Controllers;

/**
 *  HomeController
 */


class HomeController extends BaseController
{

    public function home()
    {
        $name = config('app.appName');
        return $this->twig()->render('index.tpl',[
           "name" => $name,
        ]);
    }

}