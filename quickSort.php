<?php
/**
 *
 *
 * User: 原子酱
 * Date: 2019/11/14
 * Time: 11:14
 */

/**
 * 快速排序是对冒泡排序的一种改进，通过多次比较和交换来实现排序，被认为是目前最好的一种内部排序方法
 *
 * 1、设定分界值，将数组分为左右两部分
 * 2、小于等于分界值部分 + 分界值 + 大于等于分界值部分
 * 3、左右两边数据采用递归方式，按照1、2步骤独立排序
 * 4、合并左部分 + 分界值 + 右部分
 *
 * @param $array 传入的数组值
 *
 */
function quickSort(array $array)
{
    $lenth = count($array);

    // 判断递归结束条件
    if ($lenth < 1)
        return $array;

    $mid = $array[0];
    $left = [];
    $right = [];

    for ($i = 1; $i < $lenth; $i++) { // 从1开始
        if ($array[$i] < $mid) {
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }

    $left = quickSort($left);
    $right = quickSort($right);

    return array_merge($left, (array)$mid, $right);
}

$array = [9, 7, 1, 5, 8, 3];

var_dump(quickSort($array));