<?php

declare(strict_types=1);

// https://www.php.net/manual/ru/types.comparisons.php

// example 1
if (true) {
    // branch 1
} else {
    // branch 2
}

// example 2
if (true) {
    // branch 1
}

// example 3
if (true) {
    // branch 1
} elseif (true) {
    // branch 2
} else {
    // branch 3
}

// example 4
if (true) {
    // branch 1
} elseif (true) {
    // branch 2
} elseif (true) {
    // branch 3
} else {
    // branch 4
}

// example 5
$exampleVar = 123;
switch ($exampleVar) {
    case 1:
//        echo 123;
        break;
    case 2:
//        echo 2;
        break;
    case 3:
//        echo 3;
        break;
    default:
//        echo "default behaviour!";
        break;
}

// example 6
$exampleVar = 123;
switch ($exampleVar) {
    case 1:
    case 2:
    case 3:
//        echo $exampleVar;
        break;
    default:
//        echo "default behaviour!";
        break;
}

// f(x) = y
// x = 0, 1, 2, 3, 4, 5, 6,  7,  8,  9, 10, 11, 12
// y = 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144
// Fn = Fn-1 + Fn-2
function fib($n) {
    if ($n <= 1) {
        return $n;
    }

    return fib($n - 1) + fib($n - 2);
}

//echo fib(4);
// 32 / 64 разрядный проц
if (INF) { // 2,147,483,647
//    echo "infinite true"; <----
} else {
//    echo "infinite false";
}

$youZeroVar = 0;
if ($youZeroVar === 0) {
    // branch 1
}

$a = 123;
$a = "asd";
$a = [1, 2,3,4,5,6];
$a = new stdClass();
//is_null();
//is_int();
//is_string();
//is_float();
//is_object();
//is_array();
//is_bool();
//is_resource();

function myFunc1(string $a) {
    var_dump($a);
    if (!in_array($a, ["string1", "string2", "string3"], true)) {
        throw new RuntimeException("not a valid value"); // <----
    }
    echo $a;
}

myFunc1(123);


