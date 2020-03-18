class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $res = 0; 
        
        while($x != 0) {
            $pop = $x % 10;
            $res = $res * 10 + $pop;
            $x = ($x - $pop) / 10;
            if(pow(-2,31) > $res || $res > pow(2,31) - 1){
                $res = 0;
            }
        }
        
        return $res;
    }
}
