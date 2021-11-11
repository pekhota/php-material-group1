<?php

declare(strict_types=1);

class ClassNotFoundException extends Exception {

}

try {
    require_once __DIR__."/../bootstrap/bootstrap.php";
    require_once __DIR__."/../routes/web.php";

    //Application
    // config
    // bd -> application
    // controller -> config
    // model -> model
    // view -> view


    $application = new Application(); // инициализация
    $response = $application->handle(Request::capture()); // обработка запроса
    $response->render(); // рендеринг
    $application->terminate(); // gracefull shutdown

} catch (Throwable $e) {
    $date = date("Y-m-d H:i:s");
    $logStr = sprintf("[%s] %s File: %s, Line: %s".PHP_EOL, $date, $e->getMessage(), $e->getFile(), $e->getLine());
    file_put_contents(__DIR__."/../storage/log.txt", $logStr, FILE_APPEND);
    require_once __DIR__."/../app/layouts/errors/500.php";
}
