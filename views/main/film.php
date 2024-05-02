<?php
use App\Get;
use App\Helper;

$film = Get::findFilmById(Helper::getId());
echo $film->name . '<br>';
echo $film->duration . '<br>';
echo $film->director . '<br>';
echo $film->released . '<br>';
echo $film->country . '<br>';
echo $film->genre . '<br>';
echo 'Детский билет ' .$film->price_child . '<br>';
echo 'Взрослый билет ' .$film->price_adult . '<br>';
echo $film->show_time . '<br>';
echo $film->show_date . '<br>';
?>
<div class="movie-cover">
    <img class="poster-img" src="../../public/img/posters/<?= $film->image ?>" alt="Обложка кино">
</div>
<div class="container">
    <form action="/film/mytickets" method="POST" class="login-form">
        <select name="hall">
            <option value="Зал 1">Зал 1</option>
            <option value="Зал 2">Зал 2</option>
            <option value="Зал 3">Зал 3</option>
        </select><br>
        <select name="type">
            <option value="Детский">Детский</option>
            <option name="Взрослый">Взрослый</option>
        </select><br>

        <input type="hidden" name="film_id" value="<?= $film->id ?>">
        <button type="submit" name="buyTicket" class="button-login">Купить билет</button>
    </form>
</div>

