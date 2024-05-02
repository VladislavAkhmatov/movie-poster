<?php
use App\Post;

$tickets = Post::findTicketsById();
?>

<div class="white" style="color:white">
    <?php
        foreach ($tickets as $ticket){
            echo 'Название фильма: ' . $ticket->name . '<br>';
            echo 'Дата покаказа: ' . $ticket->show_date . '<br>';
            echo 'Время показа: ' . $ticket->show_time . '<br>';
            echo 'Зал: ' . $ticket->hall . '<br>';
            echo 'Тип: ' . $ticket->type . '<br>';
            if($ticket->type == "Детский"){
                echo 'Цена: ' . $ticket->price_child . '<br>';
            }
            elseif ($ticket->type == "Взрослый"){
                echo 'Цена: ' . $ticket->price_adult . '<br>';
            }
            echo '<br>';
        }
    ?>
</div>
