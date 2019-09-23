<?php
/**
 * 电梯调度。 * https://blog.csdn.net/buyoufa/article/details/52269175
 * 每个人在一楼按下要去的楼层数，求出电梯停在哪一层，
 * 使得所有人到达该层后上下楼梯和最小
 * @param  array $persons [要去各层的人数]
 */
function elevatorDispatch($persons = [])
{
    $floorsNum = count($persons);
    array_unshift($persons, 0);
    /* 初始值 */
    $floorsSum = 0;
    $floor = 1;
    $persons1 = 0;//电梯停止楼层以下的总人数
    $persons2 = $persons[1];//停止的那一楼的总人数
    $persons3 = 0;//停止楼层以上总人数
    // 累计 $persons3 和 $floorsSum
    for ($k = 2; $k <= $floorsNum; $k++) {
        $persons3 += $persons[$k];
        $floorsSum += $persons[$k] * ($k - 1);
    }
    /* 一层层往上开，找到 停止楼层 */
    for ($i = 2; $i <= $floorsNum; $i++) {
        if ($persons1 + $persons2 < $persons3) {//临界点
            $floor = $i;
            $floorsSum += $persons1 + $persons2 - $persons3;
            $persons1 += $persons2;
            $persons2 = $persons[$i];
            $persons3 -= $persons[$i];
        }
    }
    return [
        'floor' => $floor, 'floorsSum' => $floorsSum,
    ];
}
$persons = [0, 2, 5, 7];
var_dump(elevatorDispatch($persons));//floor:3, floorsSum:9
function elevatorDispatchStupid($persons)
{
    $floorsNum = count($persons);
    array_unshift($persons, 0);
    $floorsSum = 6553;//存储最小值 ;
    $floor = 1;
    for ($i = 1; $i <= $floorsNum; $i++) { //表示第i楼层电梯停靠
        $min = 0;
        for ($j = 1; $j < $floorsNum; $j++) {
            $min += abs(($i - $j)) * $persons[$j];
        }
        if ($floorsSum > $min) {
            $floorsSum = $min;
            $floor = $i;
        }
    }
    return [
        'floor' => $floor,
        'floorsSum' => $floorsSum,
    ];
}