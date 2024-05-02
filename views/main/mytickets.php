<?php
use App\Post;

$tickets = Post::findTicketsById();
?>

<div class="back-kino4">
    <?php foreach ($tickets as $ticket): ?>
        <div class="white-ticket" style="color:white">
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
            <br>
        </div>
    <?php endforeach; ?>
</div>


<!-- Твой старый код -->
<!--
<div class="back-kino4">
    <div class="white-ticket">
    <?php
    /*
    foreach ($tickets as $ticket) {
        echo 'Название фильма: ' . $ticket->name . '<br>';
        echo 'Дата показа: ' . $ticket->show_date . '<br>';
        echo 'Время показа: ' . $ticket->show_time . '<br>';
        echo 'Зал: ' . $ticket->hall . '<br>';
        echo 'Тип: ' . $ticket->type . '<br>';
        if ($ticket->type == "Детский") {
            echo 'Цена: ' . $ticket->price_child . '<br>';
        } elseif ($ticket->type == "Взрослый") {
            echo 'Цена: ' . $ticket->price_adult . '<br>';
        }
        echo '<br>';
    }
    */
    ?>
    </div>
</div>
-->