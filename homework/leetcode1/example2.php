<?php
declare(strict_types=1);

/**
 * @param int $x
 * @return bool
 */
function isPalindrome(int $x): bool
{
    $str = (string)$x;
    $count = strlen($str);
    for ($i = 0, $j = $count - 1; $j >= 0 && $i < $count; $i++, $j--) {
        if ($str[$i] !== $str[$j]) {
            return false;
        }
    }
    return true;
}

var_dump(isPalindrome(123321));
var_dump(isPalindrome(123112321));