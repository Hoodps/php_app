<?php

/**
 * Created by PhpStorm.
 * User: Hoodps
 * Date: 2018/5/1
 * Time: 22:12
 */
namespace app\admin\controller;
use \think\Controller;

class Admin extends Controller
{
    public function add(){
        //判断是否是post提交
        if(request()->isPost()){
            //halt(input('post.'));
            $data = input('post.');
            $validate = validate('AdminUser');
            if(!$validate->check($data)){
                $this->error($validate->getError());
            }
            $data['password'] = md5(md5($data['password'].'_#s23dsf'));
            $data['status'] = 1;
            $id = 0;
            try{
               $id =  model('AdminUser')->add($data);
            }catch (\Exception $e){
                $this->error($e->getMessage());
            }
            if($id){
                $this->success('新增成功！');
            }



        }else{
            return $this->fetch();
        }


    }

}