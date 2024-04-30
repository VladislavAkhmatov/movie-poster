<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
<link rel="stylesheet" href="/../../css/style.css">
</head>

<body class="login-body">
<div class="container">
    <form action="/login" method="post" class="register-form">
        <h2>Регистрация</h2>
        <input type="text" name="lastname" placeholder="Введите Фамилию" required>
        <input type="text" name="firstname" placeholder="Введите Имя" required>
        <input type="text" name="patronymic" placeholder="Введите Отчество">
        <input type="email" name="email" placeholder="Введите email" required>
        <input type="password" name="pass" placeholder="Введите пароль" required>
        <button type="submit" name="register" class="button-register">Зарегистрироваться</button>
        <a href="login" type="button" class="button-back">Назад</a>
    </form>
</div>
</body>
</html>