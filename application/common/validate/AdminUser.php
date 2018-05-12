<?php

/**
 * Created by PhpStorm.
 * User: Hoodps
 * Date: 2018/5/1
 * Time: 22:55
 */
namespace app\common\validate;
use \think\Validate;

class AdminUser extends Validate
{
    protected $rule = [
        'username' => 'require|max:20',
        'password' => 'require|max:20',
    ];

}