<?php

namespace App\Controllers;

/*
 *  HomeController
 */

use Pongtan\View\ViewTrait;

class HomeController extends BaseController
{
    use ViewTrait;

    public function home()
    {
        $name = config('app.appName');

        return $this->view('index', [
            'name' => $name,
        ]);
    }
}
