<?php

namespace App\Controllers;

use Smarty;

/**
 * BaseController
 */

class BaseController
{

    public $view;

    public $smarty;

    public function construct__(){

    }

    public function smarty(){
        $smarty=new smarty(); //实例化smarty
        $smarty->settemplatedir(BASE_PATH.'/views/default/'); //设置模板文件存放目录
        $smarty->setcompiledir(BASE_PATH.'/storage/framework/smarty/compile/'); //设置生成文件存放目录
        $smarty->setcachedir(BASE_PATH.'/storage/framework/smarty/cache/'); //设置缓存文件存放目录
        $this->smarty = $smarty;
        return $smarty;
    }

    public function view(){
        return $this->smarty();
    }
}