<?php


namespace Wzs\Main;


class Test
{
    public static function test($string = ''){
        return [
            'say' => 'test container!',
            'string' => $string
        ];
    }
}