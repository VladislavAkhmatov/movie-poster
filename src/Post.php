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

    Public static function findAllFilms(){
        $films = \R::findAll('film');
        return $films;
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
                header("Location: auth/login?mes=ok");
                exit();
            }else{
                echo "Пользователь с таким email уже существует";
                header("Location: auth/login?mes=err");
                exit();
            }
        }
    }

    Public static function createFilm(){
        if(isset($_POST['createFilm'])){
            $create = \R::dispense('film');
            $create->name = $_POST['name'];
            $create->duration = $_POST['duration'];
            $create->director = $_POST['director'];
            $create->released = $_POST['released'];
            $create->country = $_POST['country'];
            $create->genre = $_POST['genre'];
            $create->price_child = $_POST['price_child'];
            $create->price_adult = $_POST['price_adult'];
            $create->show_date = $_POST['show_date'];
            $create->show_time = $_POST['show_time'];
            $tmpFile = $_FILES['image']['tmp_name'];
            $file = $_FILES['image']['name'];
            $create->image = $file;
            move_uploaded_file($tmpFile, 'img/posters/' . $file);
            \R::store($create);
        }
    }

    Public static function login(){
        if(isset($_POST['login'])) {
            $user = self::findByEmail();
            if(password_verify($_POST['pass'], $user->pass)){
                $_SESSION['id'] = $user->id;
                $_SESSION['name'] = $user->lastname;
                $_SESSION['full_name'] = $user->lastname . ' ' .
                    $user->firstname . ' ' . $user->patronymic;
                $_SESSION['role'] = $user->role;
                header('Location: /?mes=ok');
            }
            else{
                header('Location: /auth/login?auth=err');
                exit();
            }
        }
    }

    Public static function buyTicket(){
        if(isset($_POST['buyTicket'])){
            $ticket = \R::dispense('ticket');
            $ticket->film_id = $_POST['film_id'];
            $ticket->hall = $_POST['hall'];
            $ticket->type = $_POST['type'];
            \R::store($ticket);

        }
    }

}