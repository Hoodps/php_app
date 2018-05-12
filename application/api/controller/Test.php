<?php
/**
 * Created by PhpStorm.
 * User: Hoodps
 * Date: 2018/5/12
 * Time: 22:14
 */

namespace app\api\controller;


use think\Controller;

class Test extends Controller
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

        return show(1, 'ok', input('post.'), 201);
    }

}