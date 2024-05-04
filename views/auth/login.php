<?php
use App\Helper;

if(Helper::getString() == 'err'){
    $header = "Ошибка авторизации";
}
elseif(Helper::getString() == 'ok'){
    $header = "Вы успешно зарегистрировались";
}
elseif(Helper::getString() == 'errAuth'){
    $header = "Пользователь с таким email уже существует";
}
else{
    $header = "Авторизация";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body class="login-body">
<div class="container">
    <form action="/" method="POST" class="login-form">
        <h2><?=$header ?></h2>
        <input type="email" name="email" placeholder="Введите логин" required>
        <input type="password" name="pass" placeholder="Введите пароль" required>
        <button type="submit" name="login" class="button-login">Войти</button>
        <a href="register" type="button" class="button-reg">Регистрация</a>
    </form>
</div>
</body>
</html>