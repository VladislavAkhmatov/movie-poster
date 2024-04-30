<?php


namespace App;


class Helper
{
    public static function getId(){
        return preg_replace('/[^0-9]/', '', $_SERVER['REQUEST_URI']);
    }


}