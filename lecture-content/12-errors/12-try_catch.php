<?php

declare(strict_types=1);

// WebSiteTutorialException => --->RuntimeException<--- => Exception => Throwable

class WebSiteTutorialException extends RuntimeException {

}

class ConsoleTutorialException extends RuntimeException {

}

//function div($a, $b): float {
//    if ($b == 0) {
//        throw new RuntimeException("Division by zero error!");
//    }
//    return $a/$b;
//}

//for ($i=0; throw new Exception(); $i++) {
//    throw new Exception();
//}

//fn($x) => throw new RuntimeException("123");

try {
    throw new WebSiteTutorialException("Runtime exception");
} catch (WebSiteTutorialException | ConsoleTutorialException $e) {
    echo sprintf("<b>Block WebSiteTutorialException | ConsoleTutorialException</b> Catched exception: %s <br>", $e->getMessage());
} catch (Exception $e) {
    echo sprintf("<b>Block Exception</b> Catched exception: %s <br>", $e->getMessage());
}
catch (RuntimeException $e) {
    echo sprintf("<b>Block RuntimeException</b> Catched exception: %s <br>", $e->getMessage());
} finally {
    echo sprintf("Some finally message! <br>");
}



//try {
//    for ($i = 0; $i < 10; $i++) {
//        echo $i."<br>";
//
//        if ($i === 5) {
//            throw new RuntimeException("Some exception");
//        }
//    }
//} catch (Exception $e) {
//    echo $e->getMessage();
//}



//try {
//
//} catch (Exception $e) {
//    throw $e;
//} finally {
//
//}
