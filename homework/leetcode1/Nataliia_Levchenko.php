<?php
declare(strict_types=1);

function isPalindrome(int $x): bool
{
    $rez = false;
    $str = "$x";
    $arr = str_split($str);
    for ($i = 0; $i < count($arr); $i++) for ($j = count($arr) - 1; $j >= 0; $j--) {
        if ($arr[$i] === $arr[$j]) {
             $rez = true;
        }
        else {$rez = false;}
    }
    echo $rez;
    return $rez;
}
isPalindrome(12345654321);


