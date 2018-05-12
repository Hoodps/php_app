<?php
/**
 * Created by PhpStorm.
 * User: Hoodps
 * Date: 2018/5/12
 * Time: 22:38
 */

namespace app\common\lib\exception;


use think\exception\Handle;

class ApiHandleException extends Handle
{
    public $httpCode = 500;

    public function render(\Exception $e)
    {
        return show(0, $e->getMessage(), [], $this->httpCode);
    }

}