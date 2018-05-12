<?php

/**
 * Created by PhpStorm.
 * User: Hoodps
 * Date: 2018/5/1
 * Time: 23:01
 */
namespace app\common\model;
use \think\Model;

class AdminUser extends Model{

    protected $autoWriteTimestamp = true;

    /**
     * 新增
     * @param $data
     * @return mixed
     */
    public function add($data){
        if(!is_array($data)){
            exception('传递数据不合法');
        }
        $id = $this->allowField(true)->save($data);
        return $id;
    }


}