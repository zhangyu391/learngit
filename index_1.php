<?php

/**
 * Interface people
 *  工厂模式
 */

interface people
{
    public function say();
}

class man implements people
{
    public function say()
    {
        echo 'man';
    }
}

class woman implements people
{
    public function say()
    {
        echo 'woman';
    }
}

class SimpleFactory
{
    static function createMan()
    {
        return new man();
    }

    static function createWoman()
    {
        return new woman();
    }
}

$man = SimpleFactory::createMan();

$man->say();

echo '<br />';

$woman = SimpleFactory::createWoman();

$woman->say();