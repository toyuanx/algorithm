<?php
/**
 * 顺序查找
 *
 * User: 原子酱
 * Date: 2019/11/14
 * Time: 14:26
 */

/**
 * 从数组第一个元素开始查找，如果元素 = 查找目标，查找成功；如果到最后一个元素仍没有与查找目标相等的元素，则查找失败。
 *
 * @param array $array 被查找的数组
 * @param $findValue 目标
 *
 * @return int|string
 */
function seqSearch(array $array, $findValue)
{
    foreach ($array as $k => $v) {
        if ($v == $findValue) {
            return $k;
        }
    }

    return '无此数据';

}

$array = [9, 7, 1, 5, 8, 3];

var_dump(seqSearch($array, 0));