<?php

// https://www.php-fig.org/psr/psr-2/
// https://www.php.net/manual/ru/types.comparisons.php
// https://www.php.net/manual/ru/function.sprintf.php

class Student {
    public $name = "";
    public $age;
}

$resource = @fopen("readme.md1", "r");
if ($resource === false) {
    var_dump("no file");
    die(); // exit
}


/**
 * @param int $localVar
 * @return float|int
 */
function hello($localVar, $flag) {
    if ($flag === 1) {
        $intVar = $localVar; // string
    }

    if ($flag === 2) {
        $stringVar = $localVar;
    }
    return $localVar * 2;
}

/**
 * @var int $intVar
 */
$intVar = 123; // integer
$floatVar = 234.12313; // float
$stringVar = "123"; // string
$boolVar = true; // boolean
$arrayVar = [ 0 => 1, 1=> 2,3,4,5,6,7]; // array
$assocVar = [
    "a" => 123,
    "b" => 234,
    "c" => 567
]; // асоциативный массив - assoc array
$obj = new Student(); // object
$f = null; // null
//var_dump($resource); // resource

$res = strpos("hello world", "hello");

$res = 0;
if ($res) {

}

// == vs ===
if ($res !== false) {
    var_dump($res);
} else {
    var_dump("false");
}


var_dump("42" === (string)42);






//if ($resource) {
//    var_dump($resource);
//} else {
//    var_dump("false");
//}

//var_dump(@$k);
//echo $a1A." - ".$a1a." - ".$b;
//printf("Content of var1:  %s and var2: %s and var3: %s", $a1A, $a1a, $b);
//$a = sprintf("Content of var1:  %s and var2: %s and var3: %s", $a1A, $a1a, $b);

//$floatVariable = 1.234234234234234;
//printf("%0.2f", $floatVariable);

//var_dump($obj);
//$printRContent = print_r($e, true);
//echo "<pre>";
//echo $printRContent;
//echo "</pre>";
//$helloWorld = "hello";
//$hello_world =  "hello";

//echo "контекст строки склеен тут: "."\$a1A=".(string)$intVar;
//echo "<br>\n".PHP_EOL;
//print "\$a1a=".$a1a;
//echo "<br>\nVardump";
//var_dump($b); // служебная функция/нужна для отладки
//echo "<br>";

//echo "<br>";
//printf(@(string)$d);
//$
