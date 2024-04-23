<?php
namespace App\Main;
use App\Config;

class User extends Config
{
    public static function find()
    {
        return \R::findAll('user');
    }
}
