<?php
use App\Post;

$tickets = Post::findTicketsById();
?>

<div class="back-kino4">
    <?php foreach ($tickets as $ticket): ?>
        <div class="white-ticket">
            <div class="movie-cover">
                <img class="poster-img" src="../../public/img/posters/<?= $ticket->image ?>" alt="Обложка кино">
            </div>
            Название фильма: <?php echo $ticket->name; ?><br>
            Дата показа: <?php echo $ticket->show_date; ?><br>
            Время показа: <?php echo $ticket->show_time; ?><br>
            Зал: <?php echo $ticket->hall; ?><br>
            Тип: <?php echo $ticket->type; ?><br>
            <?php if ($ticket->type == "Детский"): ?>
                Цена: <?php echo $ticket->price_child; ?><br>
            <?php elseif ($ticket->type == "Взрослый"): ?>
                Цена: <?php echo $ticket->price_adult; ?><br>
            <?php endif; ?>
            Код билета: <?= $ticket->code?>
            <form action="qr" method="get">
                <input type="hidden" name="code" value="<?= $ticket->code ?>">
                <button type="submit">ПОКАЗАТЬ QR КОД</button>
            </form>
            <br>
        </div>
    <?php endforeach; ?>
</div>


