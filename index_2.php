<?php

/**
 * 单例模式
 */

class Single
{
    private static $name;

    private function __construct()
    {

    }

    private function clone()
    {

    }

    public static function setname()
    {
        if(!(self::$name instanceof self))
        {
            self::$name = new self;
        }

        return self::$name;
    }

    public function test()
    {
        return '调用成功';
    }
}

$a = Single::setname();
echo $a->test();

$b = Single::setname();
echo $b->test();

var_dump($a === $b);

