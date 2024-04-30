<?php
namespace App;
require '../libs/rb.php';

class Config
{
    public static function Start(){
        \R::setup('mysql:host=127.0.0.1;dbname=films', 'root', 'root');
    }

    public static function checkAuth(){
        if(isset($_POST['logout'])){
            session_destroy();
            header('Location: auth/login');
            exit();
        }
    }
}
