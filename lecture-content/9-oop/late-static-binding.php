<?php

class Base {
    public function hello() {

        return static::world();
    }

    public function world() {
        return "world";
    }

}

class Cat extends Base {
    public function world() {
        return "cat";
    }
}

class Dog extends Base {
    public function world() {
        return "dog";
    }

    public function print() {
        echo self::hello();
    }
}

$obj = new Dog();
$obj->print();