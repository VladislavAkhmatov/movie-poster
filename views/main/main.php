<?php

use App\Main\User;

$users = User::find();
?>

<h1>
<?= $_SESSION['full_name']; ?>
</h1>
<div class="p-3">
    <a href="auth/register" class="btn btn-primary">Зарегистрироваться</a>
</div>

<form action="/auth/login" method="post">
    <div class="p-3">
        <button class="btn btn-primary" name="logout">Выход</button>
    </div>
</form>
