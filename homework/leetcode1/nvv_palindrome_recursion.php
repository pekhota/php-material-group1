<?php

function isPalindromeRecursion(int $val, int $val1 = 0, int $val2 = 0, bool $isFirstCall = true): bool
{
    if ($isFirstCall) {
        if ($val < 0) {
            return false;
        }
        if ($val > -1 && $val < 10) {
            return true;
        }
        $val1 = $val;
        $isFirstCall = false;
    } else {
        if ($val1 === 0) {
            return $val === $val2;
        }
    }

    $val2 *= 10;
    $val2 += ($val1 % 10);
    $val1 = intval($val1 / 10);

    return isPalindromeRecursion($val, $val1, $val2, $isFirstCall);
}

var_dump(isPalindromeRecursion(0));
var_dump(isPalindromeRecursion(11));
var_dump(isPalindromeRecursion(-1));
var_dump(isPalindromeRecursion(9876789));
var_dump(isPalindromeRecursion(123321));
var_dump(isPalindromeRecursion(1212122121));