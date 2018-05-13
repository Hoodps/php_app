<?php
/**
 * Created by PhpStorm.
 * User: Hoodps
 * Date: 2018/5/12
 * Time: 22:14
 */

namespace app\api\controller;


use app\common\lib\exception\ApiException;
use think\Controller;

class Test extends Common
{
    public function index(){
        return [
            'name' => 'hoodps',
            'sex' => '1'
        ];
    }

    public function update($id = 0){
        $id = input('id');
    }

    public function save(){
        $data = input('post.');

        if($data['name'] != 1){
            //throw new ApiException('data not null', 400);
        }
        return show(1, 'ok', input('post.'), 201);
    }

}