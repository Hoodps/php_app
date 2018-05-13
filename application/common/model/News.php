<?php
/**
 * Created by PhpStorm.
 * User: Hoodps
 * Date: 2018/5/13
 * Time: 16:02
 */

namespace app\common\model;


use think\Model;

class News extends Model
{
    /**
     * @param int $num
     * @return false|\PDOStatement|string|\think\Collection
     */
    public function getIndexHeadNormaNews($num = 4){
        $where = [
            'status' => 1,
            'is_head_figure' => 1,
        ];

        $order = [
            'id' => 'desc'
        ];

        return $this->where($where)->field($this->_getListField())->order($order)->limit($num)->select();
    }

    /**
     * 获取推荐的数据
     */
    public function getPositionNormalNews($num = 20) {
        $data = [
            'status' => 1,
            'is_position' => 1,
        ];

        $order = [
            'id' => 'desc',
        ];

        return $this->where($data)
            ->field($this->_getListField())
            ->order($order)
            ->limit($num)
            ->select();

    }

    /**
     * 通用化获取参数的数据字段
     */
    private function _getListField() {
        return [
            'id',
            'catid',
            'image',
            'title',
            'read_count',
            'status',
            'is_position',
            'update_time',
            'create_time'
        ];
    }

}