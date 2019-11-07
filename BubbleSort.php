<?php
/**
 *
 *
 * User: 原子酱
 * Date: 2019/11/6
 * Time: 11:00
 */

/**
 * 冒泡排序
 *
 * 稳定排序算法
 *
 * 1、比较相邻的元素。如果第一个比第二个大，就交换它们两个；
 * 2、对每一对相邻元素作同样的工作，从开始第一对到结尾的最后一对，这样在最后的元素应该会是最大的数；
 * 3、针对所有的元素重复以上的步骤，除了最后一个。
 * 4、持续每次对越来越少的元素重复上面的步骤，直到没有任何一对数字需要比较。
 *
 * Class BubbleSort
 */
class BubbleSort
{
    private $sortArr;

    public function __construct(array $array)
    {
        $this->sortArr = $array;
    }

    public function sort()
    {
        // 数组长度设为n。外层共循环了n-1次，外层循环增加一次，对应内层循环就减少一次。
        // 外层循环为：for ($i = 0; i < $count-1; $i++)
        // 内层循环为：for ($j = 0; j < $count - 1 - i; $j++)

        $count = count($this->sortArr); // 数组长度
        $limit = $count - 1; // 上一次内层循环上界值
        $times = 0; // 循环次数

        for ($i = 0; $i < $count - 1; $i++) {
            // flag: 循环中是否发生过数据交换。true：发生过交换，false：未发生过交换
            $flag = false;
            $last = 0; // 记录上一次内层循环时最后一次交换的位置，初始为0

            for ($j = 0; $j < $limit; $j++) {

                // 判断条件，交换位置
                if ($this->sortArr[$j] > $this->sortArr[$j + 1]) {
                    $temp = $this->sortArr[$j];
                    $this->sortArr[$j] = $this->sortArr[$j + 1];
                    $this->sortArr[$j + 1] = $temp;

                    $flag = true; // 发生交换
                    $last = $j; // 记录每次交换的位置
                }

                $times++;
            }

            // 让下一次循环的上界值变成此次循环的最后一次交换的位置
            $limit = $last;

            if (!$flag) {
                break;
            }

        }

        var_dump($times);
        return $this->sortArr;
    }
}

//$array = [2, 5, 4, 9, 7];
//$array = [2, 4, 3, 1, 5, 6, 7, 8, 9];
$array = [8, 7, 6, 1, 2, 3, 4, 5];

$obj = new BubbleSort($array);

var_dump($obj->sort());