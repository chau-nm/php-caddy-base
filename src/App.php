<?php

namespace App;

class App
{
    const ROOT_URI = "/handle";

    public static function handle($requestUri)
    {
        $routeMap = require __DIR__ . "/route/routes.php";
        foreach ($routeMap as $route => $handler) {
            if ($requestUri === $route) {
                include __DIR__ . self::ROOT_URI . $handler;
                return;
            }
        }
        echo "404 Not Found";
    }
}