<?php
/**
 * 猴子选大王
 *
 * User: 原子酱
 * Date: 2019/12/2
 * Time: 18:26
 */

function chooseKing($nums)
{
    if (count($nums) == 1) {
        return current($nums);
    }

    foreach ($nums as $key => $value) {
        // 3可以提炼成参数
        (($key + 1) % 3 != 0) && array_push($nums, $value);
        unset($nums[$key]);
    }

    return chooseKing($nums);
}

function buildArray($num)
{
    return range(1, $num);
}

var_dump(chooseKing(buildArray(11)));