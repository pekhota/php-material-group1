<?php
// https://5minphp.ru/
declare(strict_types=1);

require_once __DIR__."/../bootstrap/bootstrap.php";

$database = require_once __DIR__."/../config/database.php";

$host = $database["host"];
$db = $database["dbname"];
$login = $database["login"];
$pass = $database["password"];

try {
    $dbh = new PDO(sprintf('mysql:host=%s;dbname=%s', $host, $db), $login, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$title = "Hello from our test site";

$header = loadView(__DIR__."/../app/views/header.php");
$footer = loadView(__DIR__."/../app/views/footer.php");

$uri = $_SERVER['REQUEST_URI'];

$routes = require_once __DIR__."/../routes/web.php";

$found = false;
foreach ($routes as $route => $data) {
    if ($route === $uri && $_SERVER["REQUEST_METHOD"] === $data["method"]) {
        $content = call_user_func($data['handler']);
        $found = true;
        break;
    }
}

if (!$found) {
    // 404
    // or 301 redirect
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /");
    exit(); // die();
}

require_once __DIR__."/../app/layouts/main.php";
