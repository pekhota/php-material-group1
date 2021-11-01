<?php

declare(strict_types=1);

/**
 * @param Integer $x
 * @return Boolean
 */
function isPalindrome(int $x): bool {
        return strrev((string)$x) === (string)$x ? true : false;
}
$x = 1221;
if(isPalindrome($x)){
    echo $x .' -> Palindrome = true ';
}else{
    echo $x .' -> Palindrome = false ';
}

$y = 1234;
if(isPalindrome($y)){
    echo $y .' -> Palindrome = true ';
}else{
    echo $y .' -> Palindrome = false ';
}

