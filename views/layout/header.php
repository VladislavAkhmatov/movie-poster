<?php
if (!isset($_SESSION['id'])) {
    $_SESSION['role'] = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="/../css/style.css">
</head>

<body>
    <div class="back-kino">
        <div class="logo-container">
            <div class="logo">
                <a href="/">
                    <img src="/img/kino.png" alt="Логотип">
                </a>
            </div>
            <?php if (isset($_SESSION['id']) && $_SESSION['role'] != "admin"): ?>
                <div class="logo">
                    <a href="/mytickets" class="login-button">Мои билеты</a>
                </div>
                <?php if (isset($_POST['buyTicket'])): ?>
                    <div class="logo">
                        <h3 style="margin-left: 50px;color: green">Билет успешно добавлен</h3>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <div class="btn-header">
                <?php if (isset($_SESSION['id'])): ?>
                    <h3>Здравствуйте, <?= $_SESSION['name'] ?></h3>
                    <form action="/" method="post">
                        <button name="logout" class="login-button">Выйти</button>
                    </form>
                <?php else: ?>
                    <form action="auth/login" method="post">
                        <button name="login" class="login-button">Войти</button>
                    </form>
                <?php endif; ?>
                <?php if (isset($_SESSION['role'])): ?>
                    <?php if ($_SESSION['role'] == "admin" && $_SERVER['REQUEST_URI'] != "/film/create"): ?>
                        <a href="/film/create" class="login-button">Добавить фильм</a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>