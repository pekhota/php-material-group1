<?php
declare(strict_types=1);
//class Solution {
//
//    /**
//     * @param Integer $x
//     * @return Boolean
//     */
function isPalindrome(int $x):bool  {
    if ($x<11)return false;

    $t =$x;

    $arrTmp=[];
    while ($t/10!==0){
        array_push($arrTmp,$t%10);
        $t=(int)($t/10);
    }

    $arrRevers=array_reverse($arrTmp);

    for ($i=0; $i<count($arrTmp); $i++) {
        if ($arrTmp[$i] !== $arrRevers[$i]) {
            return false;
        }
    }
    return true;
}

//    тест блок
print_r("<br>1 "); var_dump(isPalindrome(235632));
print_r("<br>2 "); var_dump(isPalindrome(23532));
print_r("<br>3 "); var_dump(isPalindrome(2332));
print_r("<br>4 "); var_dump(isPalindrome(-2332));
print_r("<br>5 "); var_dump(isPalindrome(10));
print_r("<br>6 "); var_dump(isPalindrome(0));
//    тест блок

//}


