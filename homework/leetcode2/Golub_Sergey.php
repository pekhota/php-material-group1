<?php
    //https://leetcode.com/problems/add-two-numbers/
    declare(strict_types=1);

    /**
    * @param array $l1
    * @param array $l2
    * @return array
    */
    function addTwoNumbers( array  $l1, array $l2):array
    {
        $val1 = 0;
        $val2 = 0;
        $arrRez = [];

        foreach ($l1 as $i1) {
            $val1 = $val1 * 10 + $i1;
        }
        foreach ($l2 as $i2) {
            $val2 = $val2 * 10 + $i2;
        }

        $tmp = $val1 + $val2;
        if ($tmp===0)return array(0);

        while ($tmp / 10 !== 0) {
            array_push($arrRez, $tmp % 10);
            $tmp = (int)($tmp / 10);
        }
         return $arrRez;
    }

    //    блок-тест
    echo "1.[2,4,3],[5,6,4] = ";
        foreach (addTwoNumbers([2,4,3],[5,6,4]) as $i){
            printf(" %d ", $i);
        };

    echo "<br>2.[9,9,9,9,9,9,9],[9,9,9,9] = ";
    foreach (addTwoNumbers([9,9,9,9,9,9,9],[9,9,9,9]) as $i){
        printf(" %d ", $i);
    };

    echo "<br>3.[0],[0] = ";
    foreach (addTwoNumbers([0],[0]) as $i){
        printf(" %d ", $i);
    };

    echo "<br>4.[0],[5,6,4] = ";
    foreach (addTwoNumbers([0],[5,6,4]) as $i){
        printf(" %d ", $i);
    };
     //    блок-тест
