<?php

/**
 * Created by PhpStorm.
 * User: Hoodps
 * Date: 2018/5/1
 * Time: 22:12
 */
namespace app\admin\controller;
use \think\Controller;

class Index extends Controller
{
    public function index(){
        return $this->fetch();
    }

    public function welcome(){
        return '234243';
    }

}