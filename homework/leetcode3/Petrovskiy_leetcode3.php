<?php

declare(strict_types=1);

function maxArea($height) {
    $maxarea = 0;
    $l = 0;
    $r = count($height) - 1;
    while ($l < $r) {
        $maxarea = max($maxarea, min($height[$l], $height[$r]) * ($r - $l));
        if ($height[$l] < $height[$r])
            $l++;
        else
            $r--;
    }
    return $maxarea;
}
$area = [1,8,6,2,5,4,8,3,7];
echo maxArea($area);
