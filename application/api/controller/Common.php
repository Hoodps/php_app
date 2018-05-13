<?php
/**
 * Created by PhpStorm.
 * User: Hoodps
 * Date: 2018/5/12
 * Time: 23:11
 */

namespace app\api\controller;


use app\common\lib\Aes;
use app\common\lib\exception\ApiException;
use app\common\lib\IAuth;
use app\common\lib\Time;
use think\Cache;
use think\Controller;

class Common extends Controller
{
    public $headers = '';

    public function _initialize()
    {
        $this->checkRequestAuth();
        //$this->testAes();
    }

    public function checkRequestAuth(){

        $headers = request()->header();
        //halt($headers);
        if(empty($headers['sign'])){
            throw new ApiException('sign不存在', 400);
        }

        if(!in_array($headers['type'], config('app.apptypes'))){
            throw new ApiException('type不合法', 400);
        }

        if(!IAuth::checkSignPass($headers)){
            throw  new ApiException('sign检验不成功', 401);
        }

        Cache::set($headers['sign'], 1, config('app.app_sign_cache_time'));

        $this->headers = $headers;


    }

    /**
     * 获取处理的新闻的内容数据
     * @param array $news
     * @return array
     */
    protected  function getDealNews($news = []) {
        if(empty($news)) {
            return [];
        }

        $cats = config('cat.lists');

        foreach($news as $key => $new) {
            $news[$key]['catname'] = $cats[$new['catid']] ? $cats[$new['catid']] : '-';
        }

        return $news;
    }

    public function testAes(){
        //$str = 'weriuoshdf8324kieurw';
        //$str1 = 'W3gdj8AbZ0ZrAMBWS6CApBJXQjUAs5IrYU8tcE6Uei8=';
        //echo (new Aes())->encrypt($str); exit;
        //echo (new Aes())->decrypt($str1); exit;

        $data = [
            'id' => 1,
            'name' => 'hoodps',
            'time' => Time::get13TimeStamp(),
        ];
        $str = 'ooBlULogZAyUH4ypI9vgFBZYsM4m4Or7/Ci+z8FRfFQ=';
        //echo (new Aes())->decrypt($str); exit;
        echo IAuth::setSign($data);exit;
    }
}