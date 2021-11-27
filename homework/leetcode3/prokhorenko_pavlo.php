<?php

declare(strict_types=1);

function maxArea(array $height):int {
        $area = 0;
        
          for($i = 0,$j = count($height) - 1;$i < $j; $j--){
            $temp = min($height[$i], $height[$j]);
            $area = max($area, $temp * ($j - $i));

            if ($height[$i] < $height[$j]){
            $i++;
            $j++;
            }

          }
        return $area;
    }

    $height = [384, 887, 278, 696, 7794, 836, 537, 493, 650, 122, 363, 28, 861, 80];

    echo maxArea($height);

