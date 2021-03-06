<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


use \think\Route;

Route::get('test', 'api/test/index');
Route::put('test/:id', 'api/test/update');
Route::post('test', 'api/test/save');

Route::get('api/:version/column', 'api/:version.column/read');

Route::get('api/:version/index', 'api/:version.index/index');