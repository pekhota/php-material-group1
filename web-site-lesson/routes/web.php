<?php

const HTTP_GET = "GET";
const HTTP_POST = "POST";

return [
    "/" => [ // main
        "method" => HTTP_GET,
        "handler" => function():string {
            return loadView(__DIR__ . "/../app/views/hero.php");
        },
    ],
    "/news" => [
        "method" => HTTP_GET,
        "handler" => function() use ($dbh):string {
            // новая область видимости

            $news = [];
            foreach($dbh->query('SELECT * from news') as $row) {
                $news[] = $row;
            }

            return loadView(__DIR__ . "/../app/views/news.php", [
                "news" => $news
            ]);
        }

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
