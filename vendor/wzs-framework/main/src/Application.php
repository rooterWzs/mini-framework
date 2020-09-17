<?php


namespace Wzs\Main;


class Application
{

    // 程序执行的开始
    public function run(){
        var_dump($_SERVER);
        die;
        Container::getContainer()->bind('Request',function (){
                return Request::create($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD'],$_SERVER);
            }
        );

        $returnController = Container::getContainer()->get('Route')->execute(); // 控制器返回的内容

        // response ----- json 序列化处理
        $response = Container::getContainer()->get('Response')->setContent($returnController)->sendContent();

        echo $response;

        // var_dump("Application is running !");


    }



}