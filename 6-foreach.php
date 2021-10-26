<?php

$data = [
    [1, "Вася", "Пупкин", "Чернигов", 20], // 0
    [2, "Дима", "Дункин", "Киев", 21], // 1
    [3, "Коля", "Конкин", "Черновцы", 19], // 2
    [4, "Петя", "Петькин", "Сумы", 22], // 3
    [5, "Женя", "Жункин", "Львов", 18], // 4
];

$assocArray = [
  "a" => 1,
  "b" => 2,
  "c" => 3
];

$numArray = [9,1,7,3,8,5,6];

$len = count($data);
for ($i=0; $i < $len; $i++) {
    $item = $data[$i];
    if ($item[0] === 1) {
        continue ;
    }
    if ($item[0] > 2 ) {
        break;
    }
    echo "<pre>";
    print_r($item);
    echo "</pre>";
}


$arr = ["abc", "bcd", "cat", "dog", "mouse", "apple"];

$retIndex = -1;
foreach ($arr as $k => $v) {
    if ($v === "cat") {
        $retIndex = $k;
        break;
    }
}
echo $retIndex;


//foreach ($numArray as $v) {
//    printf("%s => %d <br>", "-", $v);
//}

