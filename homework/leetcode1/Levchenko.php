<?php
declare(strict_types=1);

function isPalindrome(int $n): bool {
    $c = 0;
    $l = $n;
    $count = (int)log10($n) + 1;
    for ($i = 0; $i < $count; $i++) {
        $k = 10;
        $m = $l % 10;
        $l = intval($l / $k);
        if ($l === 0) {
            $k = 1;
        }
        $c = ($m + $c) * $k;
    }
    if ($c === $n) {
        return true;
    }
    return false;
}
echo (isPalindrome(123454321));
echo (isPalindrome(123));
