<?php
echo 1;die;
$a = array_rand(range(1, 10000), 3000);

shuffle($a);

/*
* @param 冒泡排序
* 它重复地走访过要排序的数列，一次比较两个元素，如果他们的顺序错误就把他们交换过来。
* 走访数列的工作是重复地进行直到没有再需要交换，也就是说该数列已经排序完成。
* */
function BubbleSort($arr) {
    $len = count($arr);
    //设置一个空数组 用来接收冒出来的泡
    //该层循环控制 需要冒泡的轮数
    for ($i = 1; $i < $len; $i++) {
        $flag = false;    //本趟排序开始前，交换标志应为假
        //该层循环用来控制每轮 冒出一个数 需要比较的次数
        for ($k = 0; $k < $len - $i; $k++) {
            //从小到大排序
            if ($arr[$k] > $arr[$k + 1]) {
                $tmp = $arr[$k + 1];
                $arr[$k + 1] = $arr[$k];
                $arr[$k] = $tmp;
                $flag = true;
            }
        }
        if(!$flag) return $arr;
    }
}

//$array = BubbleSort($a);

function sort_arr($a)
{
    //获取排序总数
    $count = count($a);

    //循环所有排序
    for($i = 1; $i < $count; $i++)
    {
        //当前数据跟后面每个数据作比较，如果大往后排，小不动
        //最后面的数据越来越大，依次排开
        for($j=0; $j<$count-$i; $j++)
        {
            //前一位大于后一位，则互换位置
            if($a[$j] > $a[$j+1])
            {
                $new = $a[$j+1];
                $a[$j+1] = $a[$j];
                $a[$j] = $new;
            }
        }
    }
    return $a;
}

$array = sort_arr($a);

echo '<pre>';
print_r($array);