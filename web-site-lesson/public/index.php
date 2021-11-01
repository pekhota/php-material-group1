<?php
// https://5minphp.ru/
declare(strict_types=1);

require_once __DIR__."/../bootstrap/bootstrap.php";

$title = "Hello from our test site";
$header = loadView(__DIR__."/../app/views/header.php");
$footer = loadView(__DIR__."/../app/views/footer.php");

$uri = $_SERVER['REQUEST_URI'];

$routes = require_once __DIR__."/../routes/web.php";

//echo "<pre>";
//var_dump($_SERVER);
//echo "</pre>";
//die();
$found = false;
foreach ($routes as $route => $data) {

    if ($route === $uri && $_SERVER["REQUEST_METHOD"] === $data["method"]) {
        $content = call_user_func($data['handler']);
        $found = true;
        break;
    }
}

if (!$found) {
    // 404
    // or 301 redirect
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /");
    exit(); // die();
}

require_once __DIR__."/../app/layouts/main.php";

$counter = 0;
function fib($n) {
    if ($n < 2) {
        return 0;
    }

    return fib($n - 1) + fib($n - 2);
}
