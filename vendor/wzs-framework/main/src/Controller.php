<?php


namespace Wzs\Main;


class Controller
{

    // 执行相关控制器方法、
    public function __construct()
    {

    }


    // 调用控制器方法  为了不限制参数
    // 所以方法设不设置$request 都无所谓
    public function callAction($controller,$method, $parameters = [])
    {
        $controller = ltrim($controller,'/');
        $controller = 'App\\http\\'.$controller;
        return call_user_func_array([$controller, $method], $parameters);
    }

}