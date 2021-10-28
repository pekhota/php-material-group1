<?php

declare(strict_types=1);

function loadView(string $path):string {
    ob_start();
    require_once $path;
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
}

session_start();
