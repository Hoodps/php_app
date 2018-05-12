<?php
/**
 * Created by PhpStorm.
 * User: Hoodps
 * Date: 2018/5/12
 * Time: 18:47
 */

namespace app\admin\controller;


use think\Controller;

class Login extends Controller
{
    public function index(){
        return $this->fetch();
    }

    public function check(){
        $data = input('post.');

    }

}