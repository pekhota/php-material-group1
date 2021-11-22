<?php

declare(strict_types=1);

// для веба:
// class User
// Model
//    class News  => DB: table(news)
//    class Relation Mapping
//    class Repository для работы с БД патерн репозиторий/
// class Page
// class View
// class DTO
// Controller
//
//Dog, Cat,  Chess (Bishop, King, Quen)

class Animal {
    public $weight; // доступен внутри класса, внутри дочерних классов, снаружи
    private $speed; // доступен внутри класса, -, -

    protected $color; // доступен внутри класса, внутри дочерних классов, -
    public $voice;
    public $kind;

    public function methodPublic() {
        echo $this->speed;
    }

    private function methodPrivate() {
        echo $this->weight;
    }

    protected function methodProtected() {
        echo $this->weight;
    }
}

final class Cat extends Animal {
    protected function abc() { // private

    }
}

abstract class Dog extends Animal implements CanAddNumbers {
    abstract public function method();
}

$obj = new Cat();


//
//
//class Calculator {
//    public function square($a, $b) {
//        return $a*$b;
//    }
//}
//// API
//
//$obj = new Calculator();
//echo $obj->square(2);
//


