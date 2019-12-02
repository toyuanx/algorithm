<?php
/**
 *
 * 两数之和
 *
 * User: 原子酱
 * Date: 2019/11/20
 * Time: 18:22
 */

function towSum($num, $target)
{
    $subArr = []; // 目标值与加数的差集合，如9-2=7，把7放到集合里面

    foreach ($num as $key => $value) {
        if(isset($subArr[$value])) {
            return [$subArr[$value], $key];
        }

        // 将差合集放到if后是为了避免出现[0,0]的错误返回
        $subArr[$target - $value] = $key;
    }
}