<?php 
/**
 * 约瑟夫环
 *
 * 方法1，递归。
踢出猴子后，数组长度不断变小，递归退出条件：数组长度为1。
参数：数组长度，m，踢出位置index。
新的位置为+m-1，并对n取余。
方法2，迭代。
i=0开始迭代，每次加1，i对m取余为0则踢出数组，否则，放入末尾，这样可以一直循环，直到数组长度为1。
方法3，数学。
 */
function yuesefu($n, $m)
{
    $monkeys = range(1, $n);
    $i = 0;
    while (count($monkeys) > 1) {
        if (($i + 1) % $m == 0) {
            unset($monkeys[$i]);
        } else {//不是要踢掉的猴子，但是已经数过了，所以放到末尾，这样能一直数下去
            array_push($monkeys, $monkeys[$i]);
            unset($monkeys[$i]);
        }
        $i++;
    }
    return current($monkeys);
}
function yuesefuRecursive($monkeys, $m, $kickIndex = 0)
{
    $count = count($monkeys);
    if ($count == 1) {
        echo $monkeys[0] . "成为猴王了";
        return;
    } else {
        $kickIndex += $m - 1;
        $kickIndex = $kickIndex % $count;
        echo $monkeys[$kickIndex] . "的猴子被踢掉了\n";
        array_splice($monkeys, $kickIndex, 1);
        yuesefuRecursive($monkeys, $m, $kickIndex);
    }
}
$n = 10;
$monkeys = range(1, $n);
$m = 3; //数到第几只猴子被踢出
// yuesefuRecursive($monkeys , $m);
function yuesefuMath($n, $m)
{
    $r = 0;
    for ($i = 2; $i <= $n; $i++) {
        $r = ($r + $m) % $i;
    }
    return $r + 1;
}
// echo yuesefu(10,3)."是猴王";