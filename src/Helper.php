<?php


namespace App;


class Helper
{
    public static function getId(){
        return preg_replace('/[^0-9]/', '', $_SERVER['REQUEST_URI']);
    }

    public static function codeGenerator(){
        echo rand();
    }

    public static function getString(){
        $uri = $_SERVER['REQUEST_URI'];
        $result = strstr($uri, '=');
        if ($result !== false) {
            return substr($result, 1); // Обрезаем первый символ '='
        } else {
            return $uri;
        }
    }
}