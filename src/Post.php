<?php


namespace App;

class Post extends Config
{
    Private static function findByEmail(){
        if(isset($_POST['email'])){
            $count = \R::findOne('user', 'login = :login', [':login' => $_POST['email']]);
            return $count;
        }
    }



    Public static function register(){
        if(isset($_POST['register'])){
            $count = self::findByEmail();
            if($count == 0){
                $create = \R::dispense('user');
                $create->lastname = $_POST['lastname'];
                $create->firstname = $_POST['firstname'];
                $create->patronymic = $_POST['patronymic'];
                $create->login = $_POST['email'];
                $create->pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
                \R::store($create);
                return;
            }else{
                echo "Пользователь с таким email уже существует";
                return;
            }
        }
    }



    Public static function login(){
        if(isset($_POST['login'])) {
            $user = self::findByEmail();
            if(password_verify($_POST['pass'], $user->pass)){
                $_SESSION['id'] = $user->id;
                $_SESSION['full_name'] = $user->lastname . ' ' .
                    $user->firstname . ' ' . $user->patronymic;
                header('Location: /?mes=ok');
            }
            else{
                header('Location: /auth/login?auth=err');
                exit();
            }
        }
    }
}