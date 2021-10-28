<?php
// https://5minphp.ru/
declare(strict_types=1);

require_once __DIR__."/../bootstrap/bootstrap.php";

$title = "Hello from our test site";
$header = loadView(__DIR__."/../app/views/header.php");
$footer = loadView(__DIR__."/../app/views/footer.php");

$page = "pricing";
if ($page === "pricing") {
    $content = loadView(__DIR__ . "/../app/views/pricing.php");
} elseif ($page === "main") {
    $content = loadView(__DIR__ . "/../app/views/hero.php");
}

require_once __DIR__."/../app/layouts/main.php";
