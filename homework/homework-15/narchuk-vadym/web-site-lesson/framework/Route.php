<?php

declare(strict_types=1);

class Route
{
    public const HTTP_GET = "GET";
    public const HTTP_POST = "POST";

    private static array $routes = array();

    /*
     *  Route::get($uri, $callback);
        Route::post($uri, $callback);
        Route::put($uri, $callback);
        Route::patch($uri, $callback);
        Route::delete($uri, $callback);
        Route::options($uri, $callback);
     */

    public static function get(string $route,  $cb) : void {
        self::route(self::HTTP_GET, $route, $cb);
    }

    public static function post(string $route,  $cb) : void {
        self::route(self::HTTP_POST, $route, $cb);
    }

    public static function route(string $method, string $route,  $cb) : void {
        self::$routes[$route][$method] = [
            "handler" => $cb
        ];
    }

    public static function getAllRoutes() : array {
        return self::$routes;
    }

}