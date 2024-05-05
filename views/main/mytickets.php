<?php
use App\Post;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    header('Location: /mytickets');
}
$tickets = Post::findTicketsById();
?>
<?php foreach ($tickets as $ticket): ?>
    <article class="ticket">
        <header class="ticket__wrapper">
            <div class="ticket__header">
                Кино|Маршрут
            </div>
        </header>
        <div class="ticket__divider">
            <div class="ticket__notch"></div>
            <div class="ticket__notch ticket__notch--right"></div>
        </div>
        <div class="ticket__body">

            <section class="ticket__section">
                <h3>Мой билет</h3>
                <p>Название фильма: <?= $ticket->name ?></p>
                <p>Дата показа: <?= $ticket->show_date ?></p>
                <p>Время показа: <?= $ticket->show_time ?></p>
                <p>Продолжительность: <?= $ticket->duration ?> мин</p>
            </section>

            <section class="ticket__section">
                <h3>Доп информация</h3>
                <p>Зал: <?= $ticket->hall ?></p>
                <p>Тип: <?= $ticket->type ?></p>
                <p>Код билета: <?= $ticket->code ?></p>

            </section>

            <section class="ticket__section">
                <h3>Покупатель</h3>
                <p><?= $_SESSION['full_name'] ?></p>
            </section>

        </div>
        <footer class="ticket__footer">
            <span>Стоимость</span>
            <?php if ($ticket->type == "Детский"): ?>
                <span><?= $ticket->price_child ?> тг.</span>
            <?php else: ?>
                <span><?= $ticket->price_adult ?> тг.</span>
            <?php endif; ?>
        </footer>
        <form class="qr-form" action="qr" method="GET">
            <input type="hidden" name="code" value="<?= $ticket->code ?>">
            <button type="submit">ПОКАЗАТЬ QR КОД </button>
        </form>
    </article>
<?php endforeach; ?>