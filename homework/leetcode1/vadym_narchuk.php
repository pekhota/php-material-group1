<?php

/*function isPalindrome($x) {
    if(is_int($x) && $x>(-1)) {
        $str = (string)$x;
        $a=0;
        $b=strlen($str)-1;
        while($a<$b){
            if($str[$a]!==$str[$b]){return false;}

            --$b;
            ++$a;
        }
        return true;
    }
    return false;
}*/
/**
 * Special function for check if positive integer is palindrome
 * @param integer
 * @return boolean
 */
declare(strict_types=1);

function isPalindrome(int $x): bool
{
    if ($x > (-1)) {
        $str = (string)$x;
        $a = 0;
        $b = strlen($str) - 1;
        while ($a < $b) {
            if ($str[$a] !== $str[$b]) {
                return false;
            }

            --$b;
            ++$a;
        }
        return true;
    }
    return false;
}

var_dump(isPalindrome(0));
var_dump(isPalindrome(11));
var_dump(isPalindrome(-1));
var_dump(isPalindrome(121));
