<?php

declare(strict_types=1);

/**
 * @param int $x
 * @return bool
 */
function isPalindrome(int $x):bool {
    $temp = (string)$x;
    $reverse = strrev($temp);

    if($temp === $reverse){
        return true;
    }

    return false;
}
