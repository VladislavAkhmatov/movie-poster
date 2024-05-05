<?php
use App\Get;
use App\Helper;

$film = Get::findFilmById(Helper::getId());

?>
<br>
<div class="back-kino5">
    <div class="movie-cover">
        <img class="poster-img" src="../../public/img/posters/<?= $film->image ?>" alt="Обложка кино">
    </div>
    <div class="container3">
        <form action="/mytickets" method="POST" class="login-form">
            <?php
            echo '<b>Название фильма: </b>' . $film->name . '<br><br>';
            echo '<b>Продолжительность: </b>' . $film->duration . ' мин' . '<br><br>';
            echo '<b>Режиссер(ы): </b>' . $film->director . '<br><br>';
            echo '<b>Год выпуска: </b>' . $film->released . '<br><br>';
            echo '<b>Страна: </b>' . $film->country . '<br><br>';
            echo '<b>Жанр(ы): </b>' . $film->genre . '<br><br>';
            echo '<b>Стоимость детского билета </b>' . $film->price_child . '<br><br>';
            echo '<b>Стоимость взрослого билета </b>' . $film->price_adult . '<br><br>';
            echo '<b>Дата показа: </b>' . $film->show_date . '<br><br>';
            echo '<b>Время показа: </b>' . $film->show_time . '<br>' . '<br>';
            ?>
            <select name="hall">
                <option value="Зал 1">Зал 1</option>
                <option value="Зал 2">Зал 2</option>
                <option value="Зал 3">Зал 3</option>
            </select><br>
            <select name="type">
                <option value="Детский">Детский</option>
                <option name="Взрослый">Взрослый</option>
            </select><br>

            <input type="hidden" name="code" value="<?= Helper::codeGenerator() ?>">
            <input type="hidden" name="film_id" value="<?= $film->id ?>">
            <button type="submit" name="buyTicket" class="button-login">Купить билет</button>
        </form>
    </div>
</div>