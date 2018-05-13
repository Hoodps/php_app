<?php
/**
 * Created by PhpStorm.
 * User: Hoodps
 * Date: 2018/5/13
 * Time: 12:32
 */

namespace app\common\lib;


class Time
{
    public static function get13TimeStamp(){

        list($t1, $t2) = explode(' ', microtime());
        return $t2 . ceil($t1 * 1000);
    }

}