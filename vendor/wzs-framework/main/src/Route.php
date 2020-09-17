<?php


namespace Wzs\Main;


class Route
{
    // 所有路由
    public $routes = [
        '/index' => 'Index@index'
    ];

    protected $currentRoute = '';


    public function __construct()
    {
        $this->routes = require_once __DIR__.'/../../../../routes/web.php'; // 引入路由文件

        $request = Container::getContainer()->get('Request');
        if(!isset($this->routes[$request->getUri()])){
            // todo handle: throw exception!
            var_dump("the route not exist");
            die;
        }
        $this->currentRoute = $this->routes[$request->getUri()];

    }


    public function execute(){
        // var_dump($this->currentRoute); // Index@index

        list($controller,$action) = explode('@',$this->currentRoute);

        $return = Container::getContainer()->get('Controller')->callAction($controller,$action);

        return $return;

    }








}