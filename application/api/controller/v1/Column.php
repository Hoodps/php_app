<?php
/**
 * Created by PhpStorm.
 * User: Hoodps
 * Date: 2018/5/13
 * Time: 13:34
 */

namespace app\api\controller\v1;


use app\api\controller\Common;

class Column extends Common
{
    public function read(){
        $column = config('cat.lists');

        $result[] = [
            'catid' => 0,
            'catName' => '首页'
        ];

        foreach ($column as $key => $item) {
            $result[] = [
                'catid' => $key,
                'catName' => $item
            ];
        }

        return show(1, 'OK', $result, 200);
    }

}