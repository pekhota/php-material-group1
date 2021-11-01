<?php

declare(strict_types=1);

/**
 * @param int $x
 * @return bool
 */
function isPalindrome(int $x): bool
{
    $s = strval($x);
    $len = strlen($s);

    for ($i = 0; $i < $len; $i++) {
        if ($s[$i] !== $s[$len - $i - 1]) {
            return false;
        }
    }

    return true;
}
