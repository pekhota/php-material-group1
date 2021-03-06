<?php

declare(strict_types=1);

try {

    // https://5minphp.ru/

    require_once __DIR__."/../bootstrap/bootstrap.php";


    $title = "Hello from our test site";

    $header = loadView(__DIR__."/../app/views/header.php");
    $footer = loadView(__DIR__."/../app/views/footer.php");

    $uri = trim($_SERVER['REQUEST_URI'], "?");

    $routes = require_once __DIR__."/../routes/web.php";

    $found = false;

    if (!empty($routes[$uri])) {
        $route = $routes[$uri];
        // $_SERVER['REQUEST_URI'] == "/news"
        // $_SERVER["REQUEST_METHOD"] == GET
        // $_SERVER["REQUEST_METHOD"] == POST

        if (!empty($route[$_SERVER["REQUEST_METHOD"]])) {
            $data = $route[$_SERVER["REQUEST_METHOD"]];

            if (!empty($data["layout"])) {
                $layout = $data["layout"];
            }
            $content = call_user_func($data['handler']);
            $found = true;
        }

    }

    if (!$found) {
        echo 404;
        die();
        // 404
        // or 301 redirect
    //    header("HTTP/1.1 301 Moved Permanently");
    //    header("Location: /");
    //    exit(); // die();
    }

    require_once $layout;

} catch (Throwable $e) {
    $date = date("Y-m-d H:i:s");
    $logStr = sprintf("[%s] %s File: %s, Line: %s".PHP_EOL, $date, $e->getMessage(), $e->getFile(), $e->getLine());
    file_put_contents(__DIR__."/../storage/log.txt", $logStr, FILE_APPEND);
    require_once __DIR__."/../app/layouts/errors/500.php";
}
