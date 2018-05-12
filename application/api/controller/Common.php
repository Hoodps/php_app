<?php
/**
 * Created by PhpStorm.
 * User: Hoodps
 * Date: 2018/5/12
 * Time: 23:11
 */

namespace app\api\controller;


use app\common\lib\Aes;
use app\common\lib\IAuth;
use think\Controller;

class Common extends Controller
{
    public function _initialize()
    {
        $this->checkRequestAuth();
        $this->testAes();
    }

    public function checkRequestAuth(){

        $header = request()->header();
        //halt($header);
    }

    public function testAes(){
        //$str = 'weriuoshdf8324kieurw';
        //$str1 = 'W3gdj8AbZ0ZrAMBWS6CApBJXQjUAs5IrYU8tcE6Uei8=';
        //echo (new Aes())->encrypt($str); exit;
        //echo (new Aes())->decrypt($str1); exit;

        $data = [
            'id' => 1,
            'name' => 'hoodps'
        ];
        $str = 'ooBlULogZAyUH4ypI9vgFBZYsM4m4Or7/Ci+z8FRfFQ=';
        echo (new Aes())->decrypt($str); exit;
        //echo IAuth::setSign($data);exit;
    }
}