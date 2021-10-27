<?php


$arr = ["abc", "bcd", "cat", "dog", "mouse", "apple"];

var_dump($arr);

foreach ($arr as $k => $v) {
    $arr[$k] = "elephant";
//    $v = "elephant";
//    var_dump($v);
}

var_dump($arr);

foreach ($arr as &$v) {
    // &$v => link => $arr[0]
    // &$v => link => $arr[1]
    // ...
    // &$v => link => $arr[n] n=5
    $v = "rat";
}

unset($v);
$v = 123;
var_dump($arr);

// summary
// 1. с помощью $k => $v, когда мы меняем елемент массива с помощью обращения по индексу
// 2. с помощью амперсанта & => ex &$v (не забываем подчищать потом переменную $v)
