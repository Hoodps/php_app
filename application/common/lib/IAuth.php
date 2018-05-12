<?php
/**
 * Created by PhpStorm.
 * User: Hoodps
 * Date: 2018/5/12
 * Time: 23:34
 */
namespace app\common\lib;

class IAuth {

    public static function setPassword($data){

        return md5($data.config('app.'));
    }

    public static function setSign($data = []){
        // 1 按照字段排序
        ksort($data);
        // 2 拼接字符串数据
        $str = http_build_query($data);
        // 3 加密
        $str = (new Aes())->encrypt($str);

        return $str;
    }
}