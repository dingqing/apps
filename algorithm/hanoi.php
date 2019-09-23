<?php 
/**
 * 汉诺塔（第归）
 * https://blog.csdn.net/xb2355404/article/details/79144451
 * @param  [number] $n [阶数]
 * @param  [string] $a [柱子]
 * @param  [string] $b [柱子]
 * @param  [string] $c [柱子]
 */
function hanoi($n, $a, $b, $c)
{
    if ($n == 1) {
        move($a, $c);
    } else {
        hanoi($n - 1, $a, $c, $b);
        move($a, $c);
        hanoi($n - 1, $b, $a, $c);
    }
}
function move($a, $c)
{
    var_dump('move:' . $a . '-->' . $c);
}
// hanoi(3,'a','b','c');