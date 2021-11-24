<?php

declare(strict_types=1);

function get_total_square($height) 
{
    $square_of_container = 0; 
    $left = 0; 
    $right = count($height) - 1;

    while ($left < $right) 
    {
        $square_of_container = max($square_of_container, min($height[$left], $height[$right]) * ($right - $left));
            
        if ($height[$left] < $height[$right])
        {
            $left++;
        }

        else
        {
            $right--;
        }
    }

    ++$GLOBALS["counter"];

    printf("Square of container №%d = %d\n", $GLOBALS["counter"], $square_of_container);
}
$counter = 0;

$height = [1, 8, 6, 2, 5, 4, 8, 3, 7];
get_total_square($height);

$height = [1, 1];
get_total_square($height);

$height = [4, 3, 2, 1, 4];
get_total_square($height);

$height = [1, 2, 1];
get_total_square($height);

$height = [3, 6, 4, 7, 1, 5, 4, 6, 7];
get_total_square($height);