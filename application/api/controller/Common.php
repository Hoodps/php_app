<?php
/**
 * Created by PhpStorm.
 * User: Hoodps
 * Date: 2018/5/12
 * Time: 23:11
 */

namespace app\api\controller;


use think\Controller;

class Common extends Controller
{
    public function _initialize()
    {
        $this->checkRequestAuth();
    }

    public function checkRequestAuth(){

        $header = request()->header();
        halt($header);
    }
}