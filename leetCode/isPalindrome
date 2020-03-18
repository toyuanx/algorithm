class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        // $x为负数、$x不等于0且末位为0的数不输入回文数
        if($x < 0 || ($x % 10 == 0) && $x != 0) return false;
        
        $revNum = 0;
        
        // 当x大于反转数时
        while($x > $revNum) {
            $revNum = $revNum * 10 + $x % 10;
            $x = intval($x / 10);
        }
        
        return $x == $revNum || $x == intval($revNum / 10);
    }
}
