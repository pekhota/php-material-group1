<?php

declare(strict_types=1);

// x => 0, 1, 2, 3, 4, 5, 6, 7, 8
// y => 0, 1, 1, 2, 3, 5, 8, 13, 21
// f(x) => y
// F(n) => F(n-1) + F(n-2) <===

//  F(0) => 0
//  F(1) => 1
//  F(2) => 1 + 0 // 1
//  F(3) => 1 + 1 // 2
//  F(4) => 2 + 1 // 3
//  F(5) => F(4)//3 + F(3)//2 => 5
//  F(6) => F(5)//5 + F(4)//3 => 8

function fibv1(int $c): int {
    $prev1 = 0;
    $prev2 = 1;

    $y = 0;

    if ($c === 1) {
        return 1;
    }

    for ($x = 2; $x <= $c; $x++) {
        $y = $prev1 + $prev2;
        $prev1 = $prev2;
        $prev2 = $y;
    }
    return $y;
}

function fibv2(int $x):int {
    if ($x < 2) {
        return $x;
    }

    return fibv2($x-1) + fibv2($x - 2);
}

for ($x = 0; $x <=8; $x++) {
    printf("%d => %d <br>", $x, fibv2($x));
}



