<?php
declare(strict_types=1);
function rev1($arr): int{
    $count = count($arr);
    $k=10;
    $c = 0;
    for ($i = 0; $i<$count; $i++){
        if ($i == count($arr) -1){
            $k=1;
        }
        $c = ($c + $arr[$i])*$k;
    }
    return $c;
}
function rev2(int $r): int{
    $count = (int)log10($r)+1;
    $c = 0;
    $l = $r;
    for ($i = 0; $i < $count; $i++) {
        $k = 10;
        $m = $l % 10;
        $l = intval($l / $k);
        if ($l === 0) {
            $k = 1;
        }
        $c = ($m + $c) * $k;
    }
    return $c;

}
function sum_arr1($array1, $array2): int{
    $arr1 = array_reverse($array1);
    $arr2 = array_reverse($array2);
    return rev1($arr1)+rev1($arr2);
}
function sum_arr2(int $n1, int $n2){
    return rev2($n1) + rev2($n2);
}

$arr = [2,5,7,9];
$arr1 = [3,1,5];
echo "<pre>";
echo sum_arr1($arr,$arr1);
echo "</pre>";
echo sum_arr2(258, 456);

