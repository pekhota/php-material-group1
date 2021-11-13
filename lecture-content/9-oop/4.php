<?php
// namespace
abstract class Example {
    public const EXAMPLE = 123;

    public static $staticProperty;
    public $justProp;

    public static function staticMethod() {
        return 123;
    }

    public function example() {

    }

    public function simpleMethod() {
        $this->justProp;
        $this->example();
//        Example::staticMethod();
        echo self::staticMethod();
        echo self::$staticProperty;
    }
}

class HelloWorld extends Example {
    public function simpleMethod() {
    }

    public function demo() {
        $this->simpleMethod();
    }
}

trait ExampleTrait {
    public function doSomething() {

    }
}

class Cat extends HelloWorld {
    use ExampleTrait;
}

$cat = new Cat();
$cat->doSomething();

//Example::staticMethod();
//echo Example::$staticProperty;
//
//$obj = new HelloWorld();
