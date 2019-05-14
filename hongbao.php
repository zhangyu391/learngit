<?php

/**
 * 红包随机
 * money 总钱数
 * people 总人数
 * 每个人最少分的 0.01元
 */
function hongbao($money = 10, $people = 10)
{
    if($people > ($money * 100))
    {
        echo '钱数不能少于人数';die;
    }

    for($i=1; $i<=$money; $i++)
    {

    }
}

$arr = hongbao(200, 10);

echo '<pre>';

print_r($arr);