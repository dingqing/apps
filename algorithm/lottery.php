<?php 
/**
 * 公司年会红包抽奖算法。
 * 要求：
 * 1.保证尽量公平随机；
 * 2.抽奖员工有1000人，一共有100W，
 * 特等奖（1人：2w），一等奖（10人：1w）,二等奖（20人：5000元），
 * 三等奖（40人：2000元），四等奖（100人：1000元），
 * 其它人的获奖金额但必须在[10,999]的闭区间内；
 * 3.每份获奖金额均为正整数。
 */
function prizePool($totalPeople = 1000, $prizeConfig = [])
{
    $pool = [];
    $num = 0;
    foreach ($prizeConfig as $k => $val) {
        for ($i = 0; $i < $k; $i++) {
            $pool[] = $val;
            $num++;
        }
    }
    for ($j = 0; $j < $totalPeople - $num; $j++) {
        $pool[] = rand(10, 999) . '块';
    }
    return $pool;
}
function getReward($totalPeople = 1000, $prizeConfig = [])
{
    $prizePool = prizePool($totalPeople, $prizeConfig);
    shuffle($prizePool);
    $rewards = [];
    for ($i = 0; $i < $totalPeople; $i++) {
        $winKey = array_rand($prizePool);
        $rewards[$i] = $prizePool[$winKey];
        unset($prizePool[$winKey]);
    }
    return $rewards;
}
define('PRIZECONFIG', [
    1 => '特等奖2万',
    10 => '一等奖1万',
    20 => '二等奖五千',
    40 => '三等奖两千',
    100 => '四等奖一千',
]);
define('TOTAL_PEOPLE', 1000);
$rewards = getReward(TOTAL_PEOPLE, PRIZECONFIG);
var_dump($rewards);