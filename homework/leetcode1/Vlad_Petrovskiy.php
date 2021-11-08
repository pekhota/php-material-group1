<?php

declare(strict_types=1);

function isPalindrome(int $x) {
    $a = strrev((string)$x);
    if($a==$x){
        return true;
    }
    else{
        return false;
    }
}


