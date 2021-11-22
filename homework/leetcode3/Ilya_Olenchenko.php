<?php
declare(strict_types=1);

//test 1
func([1, 8, 6, 2, 5, 4, 8, 3, 7]);

//test2
func([4,3,2,1,4]);

function func($param) 
{
    $l = 0; 
    $r = count($param) - 1;
    $result = 0; 

    while ($l < $r) 
    {
        if ($param[$l] < $param[$r])
        $l++;
    else
        $r--;

        $result = max($result, min($param[$l], $param[$r]) * ($r - $l));
    }

    printf("result: %d\n", $result);
}
