<?php

declare(strict_types=1);

/**
 * Special function for printing data
 *
 * @param string $a
 * @param int $b
 * @param bool $c
 * @return int
 */
function hello(string $a, int $b = 0, bool $c = true): int {
    echo $a;
    return $b;
}

hello("123");
