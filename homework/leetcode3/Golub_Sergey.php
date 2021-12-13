<?php
declare(strict_types=1);


/**
 * @param Integer[] $height
 * @return int
 */
function maxArea(array $height): int
{
    $length = count($height);
    $max_volume = 0;
    $lineY = 0;
    $lineX = 0;

    for ($i = 0; $i < $length; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($height[$i] * ($j - $i) > $max_volume) {
                $lineY = $height[$i] <= $height[$j] ? $height[$i] : $height[$j];
                $lineX = $j - $i;
                $max_volume = $lineY * $lineX;
            }
        }
    }
    return $lineY * $lineX;
}
//TEST
    print_r(maxArea([1,2,1]));
    print_r("<br>");
    print_r(maxArea([4,3,2,1,4]));
    print_r("<br>");
    print_r(maxArea([1,8,6,2,5,4,8,3,7]));
//TEST

