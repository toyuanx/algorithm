<?php
/**
 *
 *
 * User: 原子酱
 * Date: 2019/11/14
 * Time: 13:53
 */

/**
 * 二分查找：假设数据是按升序排序的（必须先排序，再查找），给定数据x，从中间位置开始比较，相等则成功；小于则在前半段查找；大于在后半段查找，找到为止。
 *
 * @param array $array 要查找的有序数组
 * @param $leftIndex 起始区间索引
 * @param $rightIndex 结束区间索引
 * @param $findValue 要查找的数字
 */
function binSearch(array $array, $leftIndex, $rightIndex, $findValue)
{
    if ($leftIndex > $rightIndex) {
        echo "无此数据： $findValue";
        return -1;
    }

    $middleIndex = round(($leftIndex + $rightIndex) / 2);

    if ($findValue == $array[$middleIndex]) {
        echo "找到数据： index = $middleIndex;  value = $array[$middleIndex]";
        return $middleIndex;
    } else if ($findValue < $array[$middleIndex]) {
        return binSearch($array, $leftIndex, $middleIndex - 1, $findValue);
    } else {
        return binSearch($array, $middleIndex + 1, $rightIndex, $findValue);
    }

}

$array = [55, 57, 59, 99, 190, 200, 201];
var_dump(binSearch($array, 0, 6, 202));
