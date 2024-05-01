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
                <img src="/img/kino.png" alt="Логотип">
            </div>
            <div class="btn-header">
                <?php if (isset($_SESSION['id'])): ?>
                    <h3>Здравствуйте, <?= $_SESSION['name'] ?></h3>
                    <form action="/" method="post">
                        <button name="logout" class="login-button">Выйти</button>
                    </form>
                <?php else: ?>
                    <form action="/login" method="post">
                        <button name="login" class="login-button">Войти</button>
                    </form>
                <?php endif; ?>

                <?php if ($_SESSION['role'] == "admin" && $_SERVER['REQUEST_URI'] != "/film/create"): ?>
                    <a href="/film/create" class="login-button">Добавить фильм</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>