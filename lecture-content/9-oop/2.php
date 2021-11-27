<?php

declare(strict_types=1);

class Number {
    private $db;
    private $value;
    private $value2;
    private $value3;

    /**
     * @param $value
     */
    public function __construct(PDO $db)
    {
        $this->db = $db;
        // validation
    }



    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return mixed
     */
    public function getValue2()
    {
        return $this->value2;
    }

    /**
     * @return mixed
     */
    public function getValue3()
    {
        return $this->value3;
    }
}

$obj = new Number(1,2,3);

// v1.110.0
class Calculator {
    private function time() {
        return microtime();
    }

    protected function seed() {
//        microtime() + hash
    }

    public function addObjects(Number $a, Number $b) {
        return $a->getValue() + $b->getValue();
    }

    public function add($a , $b) {
        return $a + $b;
    }

    public function multiply($a, $b) {
       return $a * $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }

    public function hash() {
        return $this->seed().md5(strval(rand()));
    }

//    public function div
}

function testCalculatorAdd() {
    $obj = new Calculator();
    assert($obj->add(2,3) === 5);
    assert($obj->add(1000,1000) === 2000);
    assert($obj->add(-5,5) === 0);
}

function testCalculatorMultiply() {
    $obj = new Calculator();
    assert($obj->multiply(2,3) === 6);
    assert($obj->multiply(1000,1000) === 1000000);
    assert($obj->multiply(-5,5) === -25);
}

testCalculatorAdd();
testCalculatorMultiply();

class CustomCalculator extends Calculator {
    public function customHash() {
        return $this->seed().hash("sha256", rand());
    }

    public function div($a, $b) {
        return $a/$b;
    }
}

$clientObj = new CustomCalculator();
$clientObj1 = new CustomCalculator();
echo $clientObj->add(2, 3);
echo $clientObj->hash();


