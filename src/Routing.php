<?php

namespace App;

class Routing
{
    private static $routes = [];

    public static function Route($uri, $file, $queryMethod = NULL)
    {

        self::$routes[] = [
            'uri' => $uri,
            'file' => $file,
        ];
        foreach (self::$routes as $route) {
            $queryUri = strtok($_SERVER['REQUEST_URI'], '?'); // Получаем URI без строки запроса
            if ($route['uri'] === $queryUri) {
                require_once "../views/{$route['file']}.php";
                exit();
            }
        }
    }

    public static function Error(){
        require_once "../views/404.php";
    }
}
