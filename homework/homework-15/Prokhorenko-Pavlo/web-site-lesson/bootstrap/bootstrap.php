<?php

declare(strict_types=1);

function d($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

function dd($var) {
    d($var);
    die();
}

/**
 * @param string $path
 */
function redirect301(string $path) {
    header("HTTP/1.1 301 Moved Permanently");
    header(sprintf("Location: %s", $path));
    exit();
}

function loadView(string $path, array $params = null) {
    if (!empty($params)) {
        extract($params);
    }
    ob_start();
    require_once $path;
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
}

spl_autoload_register(function ($className) {

    if (file_exists(sprintf(__DIR__."/../framework/%s.php", $className))) {
        require_once sprintf(__DIR__."/../framework/%s.php", $className);
        return ;
    }


    if (file_exists(sprintf(__DIR__."/../app/controllers/%s.php", $className))) {
        require_once sprintf(__DIR__."/../app/controllers/%s.php", $className);
        return ;
    }

    if (file_exists(sprintf(__DIR__."/../app/models/%s.php", $className))) {
        require_once sprintf(__DIR__."/../app/models/%s.php", $className);
        return ;
    }

    if (file_exists(sprintf(__DIR__."/../framework/ServiceProviders/%s.php", $className))) {
        require_once sprintf(__DIR__."/../framework/ServiceProviders/%s.php", $className);
        return ;
    }

    throw new ClassNotFoundException(sprintf("class %s not found and can't be loaded", $className));
});

session_start();
