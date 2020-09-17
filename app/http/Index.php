<?php


namespace App\http;


class Index
{
    public function index(){
//        var_dump('hello php1');
        return [
            'code' => 1,
            'message' => 'ojbk!',
            'data' => [1,1]
        ];
        // return 'controller index/index';
    }
}