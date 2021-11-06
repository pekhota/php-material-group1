<?php

const HTTP_GET = "GET";
const HTTP_POST = "POST";

class ValidateException extends Exception {

}

return [
    "/" => [ // main
        HTTP_GET => [
            "handler" => fn() => loadView(__DIR__ . "/../app/views/hero.php")
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
        HTTP_POST => [
            "handler" => function() use ($dbh) {
                try {
                    $title = $_POST["title"] ?: throw new ValidateException("title is empty");
                    $date = $_POST["date"] ?: throw new ValidateException("date is empty");
                    $author = $_POST["author"] ?: throw new ValidateException("author is empty");
                    $body = $_POST["body"] ?: throw new ValidateException("body is empty");

                    $stmt = $dbh->prepare("
                        INSERT INTO news (title, date, author, body) 
                        VALUES (:title, :date, :author, :body)");
                    $stmt->bindParam(':title', $title);
                    $stmt->bindParam(':date', $date);
                    $stmt->bindParam(':author', $author);
                    $stmt->bindParam(':body', $body);

                    $stmt->execute();

                    redirect301("/news");
                } catch (ValidateException $e) {
                    echo $e->getMessage();
                    die();
                }
            }
        ]
    ],




    "/signup" => [
        HTTP_GET => [
            "layout" => __DIR__."/../app/layouts/login.php",
            "handler" => fn() => loadView(__DIR__ . "/../app/views/signup.php")
        ],
        HTTP_POST => [
            "handler" => function() use ($dbh) {
                try {
                    // редиректнуть на страницу авторизации
                    $email = $_POST["email"] ?: throw new ValidateException("email is empty");
                    $password = $_POST["password"] ?: throw new ValidateException("password is empty");


                    $stmt = $dbh->prepare("SELECT * FROM users WHERE email=?");
                    $stmt->execute([$email]);
                    $user = $stmt->fetch();

                    !$user ?: throw new ValidateException("User exist");

                    $passwordHashed = hash("sha256", $password);

                    $stmt = $dbh->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':password', $passwordHashed);
                    $stmt->execute();

                    redirect301("/login");
                } catch (ValidateException $e) {
                    echo $e->getMessage();
                    die();
                }
            }
        ]
    ],
    "/user" => [ // <--------------
        HTTP_GET => [
            "handler" => function() {
                return loadView(__DIR__."/../app/views/user.php"); // <------------------
            }
        ]
    ],
    "/logout" => [
        HTTP_GET => [
            "handler" => function() {
                $_SESSION = [];
                redirect301("/");
            }
        ]

    ],
    "/login" => [
        HTTP_GET => [
            "layout" => __DIR__."/../app/layouts/login.php",
            "handler" => fn() => loadView(__DIR__ . "/../app/views/login.php")
        ],

        HTTP_POST => [
            "handler" => function() use ($dbh) {

            try{
                $email = $_POST["email"] ?: throw new ValidateException("email is empty");
                $password = $_POST["password"] ?: throw new ValidateException("password is empty");

                // запрос к базе данных
                $stmt = $dbh->prepare("SELECT * FROM users WHERE email=?");
                $stmt->execute([$email]);
                $user = $stmt->fetch();

                if ($user === false) {
                    throw new ValidateException("user and password is not correct");
                }

                $passwordHashed = hash("sha256", $password);
                if ($user["password"] !== $passwordHashed) {
                    throw new ValidateException("password is not correct");
                }

                $_SESSION["user"] = [
                    "email" => $user["email"]
                ];

                redirect301("/user");
                
            }catch (ValidateException $e) {
                echo $e->getMessage();
                die();
            }
 


            }
            ]
            //

                // проверить что пользователь существует +
                // проверяем что пароль совпадает +
                // редиректим пользователя на приватную страницу
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

                "handler" => function() use ($dbh):string {

                $masonry = [];
                            
                    foreach($dbh->query('SELECT * from masonry ORDER BY id DESC') as $row) {
                        $masonry[] = $row;
                    }
                    

                    return loadView(__DIR__ . "/../app/views/masonry.php", [
                        "masonry" => $masonry
                    ]);
            
                },
            ],
            HTTP_POST => [
                "handler" => function() use ($dbh) {
                    try {
                    
                        $title = $_POST["title"] ?: throw new ValidateException("title is empty");
                        $image = $_POST["image"] ?: throw new ValidateException("image is empty");                       
                        $text = $_POST["text"] ?: throw new ValidateException("text is empty");
                        $author = $_SESSION["user"]["email"] ?: throw new ValidateException("author is empty");

                        $author = strtok($author, '@');
                        
                        $stmt = $dbh->prepare("
                            INSERT INTO masonry (title, image, text,autor,data) 
                            VALUES (:title, :image, :text, :autor,CURDATE())");
                        $stmt->bindParam(':title', $title);
                        $stmt->bindParam(':image', $image);
                        $stmt->bindParam(':text', $text);
                        $stmt->bindParam(':autor', $author);                    
                                   

                        $stmt->execute();
                    
                        
                       redirect301("/masonry");

                    } catch (ValidateException $e) {
                        echo $e->getMessage();
                        die();
                    }
                }
            ]
        ],


        "/fillmasonry" => [
            HTTP_GET => [
                "handler" => function():string {
                    return loadView(__DIR__ . "/../app/views/fillmasonry.php");
                },                      
            ],    
        ]
      


];
