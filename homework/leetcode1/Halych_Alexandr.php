<?php

declare(strict_types=1);

function isPalindrome(int $num): bool
{
    $temp_str = strval($num);
    $len = strlen($temp_str);
    $temp = 0;  

    for ($i = $len; $i > 0 ; $i--)
    { 
        if($temp_str[$temp] !== $temp_str[$i - 1])
        {
            return false;
        }

        $temp++;
    } 

    return true;
}

var_dump(isPalindrome(0));
var_dump(isPalindrome(11));
var_dump(isPalindrome(-1));
var_dump(isPalindrome(9876789));
var_dump(isPalindrome(123321));
var_dump(isPalindrome(1212122121));