<?php


require_once __DIR__.'/../vendor/autoload.php';

date_default_timezone_set('UTC');

use \Wzs\Main\Container;

/*
|--------------------------------------------------------------------------
| 创建一个 application
|--------------------------------------------------------------------------
*/

//Container::getContainer()->bind('Request',function (){
//    return Request::create(
//        $_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD'],$_SERVER
//    );
//});

//echo Container::getContainer()->get('Request')->getUri();

//echo Container::getContainer()->get('Response')->setContent(
//    Container::getContainer()->get('Request')->getUri()
//)->send();


    //->start();


/*
|--------------------------------------------------------------------------
| 创建一个 Container 注册 and 绑定
|--------------------------------------------------------------------------
*/

Container::getContainer()->get('Application')->run();

/*
|--------------------------------------------------------------------------
| 加载路由
|--------------------------------------------------------------------------
*/



