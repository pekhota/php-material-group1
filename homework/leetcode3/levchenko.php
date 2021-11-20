<?php
declare(strict_types=1);
$arr = [];
function maxArea($arr): int
{
    $maxAr = 0;
    $count = count($arr);
    for ($i = 0; $i < $count; $i++) {
        for ($j = 1; $j < $count; $j++) {
            if ($arr[$i] < $arr[$j]) {
                $area = $arr[$i] * ($j - $i);
                if ($maxAr < $area) {
                    $maxAr = $area;
                }
            } else {
                $area = $arr[$j] * ($j - $i);
                if ($maxAr < $area) {
                    $maxAr = $area;
                }
            }
        }
    }
    return $maxAr;
}
$a = [1,8,6,2,5,4,8,3,7];
//$a = [1,1];
//$a = [1,2,1];
//$a = [4,3,2,1,4];
echo maxArea($a);