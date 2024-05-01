<?php

use App\Get;

$films = Get::findFilmsByDate($_GET['date']);
?>


<div class="back-kino2">
    <div class="menu-bar">
        <form action="/" method="get" class="form-inline">
            <input type="date" name="date" required>
            <button class="buy-ticket">Посмотреть фильмы с текущей датой</button>
        </form>
    </div>

    <div class="schedule-container">
        <h1>
            Расписание кино
        </h1>
    </div>
    <?php if (!isset($_GET['date'])): ?>
        <div class="schedule-container2">
            <h1>Выберите дату для просмотра фильмов</h1>
        </div>
    <?php endif; ?>
    <?php if (isset($_GET['date']) && !$films): ?>
        <div class="schedule-container2">
            <img src="../../public/img/cat.png" alt="">
        </div>
    <?php else: ?>
        <?php foreach ($films as $film): ?>
            <div class="movie-description">
                <div class="movie-cover">
                    <img class="poster-img" src="../../public/img/posters/<?= $film->image ?>" alt="Обложка кино">
                </div>
                <div class="movie-info">
                    <h2><?= $film->name ?></h2>
                    <p>Продолжительность: <?= $film->duration ?> мин</p>
                    <p>Режиссер: <?= $film->director ?></p>
                    <p>Дата выпуска: <?= $film->released ?></p>
                    <p>Страна: <?= $film->country ?></p>
                    <p>Жанр: <?= $film->genre ?></p>
                    <h1>Время: <?= $film->show_time ?></h1>
                </div>
                <?php if (isset($_SESSION['id']) and $_SESSION['role'] != "admin"): ?>
                    <form action="/film" method="get">
                        <button class="ticket">Купить билет</button>
                        <input name="id" type="hidden" value="<?= $film->id ?>">
                    </form>
                <?php elseif ($_SESSION['role'] != "admin"): ?>
                    <p>Войдите для покупки билета</p>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>