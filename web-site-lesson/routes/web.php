<?php

const HTTP_GET = "GET";
const HTTP_POST = "POST";

return [
    "/" => [
        "method" => HTTP_GET,
        "handler" => function():string {
            return loadView(__DIR__ . "/../app/views/hero.php");
        },
    ],
    "/pricing" => [
        "method" => HTTP_GET,
        "handler" => function():string {
            return loadView(__DIR__ . "/../app/views/pricing.php");
        },
    ],
    "/masonry" => [
        "method" => HTTP_GET,
        "handler" => function():string {
            return loadView(__DIR__ . "/../app/views/masonry.php");
        },
    ]
];
