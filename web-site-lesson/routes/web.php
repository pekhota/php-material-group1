<?php

const HTTP_GET = "GET";
const HTTP_POST = "POST";

return [
    "/" => [ // main
        HTTP_GET => [
            "handler" => function():string {
                return loadView(__DIR__ . "/../app/views/hero.php");
            },
        ]
    ],
    "/news" => [
        HTTP_GET => [
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
    ],
    "/signup" => [
        HTTP_GET => [
            "layout" => __DIR__."/../app/layouts/signup.php",
            "handler" => function() {
                return loadView(__DIR__ . "/../app/views/signup.php");
            }
        ],
        HTTP_POST => [
            "handler" => function() use ($dbh) {
                $stmt = $dbh->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
                $stmt->bindParam(':email', $_POST["email"]);
                $stmt->bindParam(':password', $_POST["password"]);

                $stmt->execute();

                header("HTTP/1.1 301 Moved Permanently");
                header("Location: /");
                exit();
            }
        ]
    ],
    "/pricing" => [
        HTTP_GET => [
            "handler" => function():string {
                return loadView(__DIR__ . "/../app/views/pricing.php");
            },
        ]
    ],
    "/masonry" => [
        HTTP_GET => [
            "handler" => function():string {
                return loadView(__DIR__ . "/../app/views/masonry.php");
            },
        ]
    ]
];
