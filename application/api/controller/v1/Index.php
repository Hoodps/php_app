<?php
/**
 * Created by PhpStorm.
 * User: Hoodps
 * Date: 2018/5/13
 * Time: 16:01
 */

namespace app\api\controller\v1;


use app\api\controller\Common;

class Index extends Common
{
    public function index(){

        $heads = model('News')->getIndexHeadNormaNews();
        $heads = $this->getDealNews($heads);
        $positions = model('News')->getPositionNormalNews();
        $positions = $this->getDealNews($positions);

        $result = [
            'heads' => $heads,
            'positions' => $positions
        ];
        return show(1, 'Ok', $result, 200);
    }

}