<?php
/**
 * HTTP 路由
 * @copyright PHPupil Framework http://www.phpupil.com/
 * @author 吴跃忠 <357397264@qq.com>
 */
use PHPupil\Framework\Route;

Route::get("/",function (){

    return view('blog/index');
});