<?php
/**
 * Created by PhpStorm.
 * User: zhengcheng
 * Date: 2018/11/13
 * Time: 10:53 AM
 */
use think\facade\Route;
use think\facade\Config;


Route::get('index/index', function() {
    var_dump(Config::get('index.'));
});

Route::get('index/index2', 'index/index/index2');


Route::get('admin/admin', 'admin/admin/admin');