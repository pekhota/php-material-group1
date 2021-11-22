<?php

declare(strict_types=1);

interface CanAddNumbers {
    public function add(int $a, int $b) ;
}

interface CanMultiplyNumbers {
    public function multiply(int $a, int $b);
}

class Calculator  {
    protected function add(int $a ,int $b) {
        return $a + $b;
    }

    public function multiply(int $a, int $b) {
        return $a * $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }
}

class CustomCalc extends Calculator {
    public function add(int $a, int $b)
    {
        $res = parent::add($a, $b);
        return $res + 1;
    }
}

class MyCustomAdd implements CanAddNumbers {
    public function add(int $a ,int $b) {
        return $a + $b;
    }
}

function someLogic(CanAddNumbers $a) {
    $a->add(2, 3);
}

function someLogic2(CanMultiplyNumbers $a) {
    $a->multiply(2, 3);
}