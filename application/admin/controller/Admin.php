<?php
/**
 * Created by PhpStorm.
 * User: tien
 * Date: 2018/11/13
 * Time: 11:05 AM
 */

namespace app\admin\controller;


use app\index\controller\Index;
use think\facade\Config;

class Admin
{
    public function admin()
    {
        //echo Config::get('app.admin_type_success');
        $index = new Index();
        $res =  $index->index2();
        var_dump($res);
        exit;
    }
}