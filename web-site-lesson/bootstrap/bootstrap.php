<?php

declare(strict_types=1);

function dd($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
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

session_start();
