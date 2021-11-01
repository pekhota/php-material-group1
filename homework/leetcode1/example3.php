<?php

declare(strict_types=1);

/**
 * @param int $x
 * @return bool
 */
function isPalindrome(int $x): bool
{
    if ($x < 0) {
        return false;
    }

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

var_dump(isPalindrome(0));
var_dump(isPalindrome(11));
