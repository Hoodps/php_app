<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 * @param $status
 * @param $message
 * @param $data
 * @param $httpCode
 * @return \think\response\Json
 */
function show($status, $message, $data, $httpCode){

    $data = [
        'status' => $status,
        'message' => $message,
        'data' => $data
    ];

    return json($data,$httpCode);
}