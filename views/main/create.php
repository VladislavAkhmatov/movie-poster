<div class="form-create">
    <div class="container-2">
        <form action="/" method="POST" class="login-form" enctype="multipart/form-data">
            <h2>Добавить фильм</h2>

            <label>Название фильма</label>
            <input type="text" name="name" required>

            <label>Длительность фильма (в мин.)</label>
            <input type="number" name="duration" required>

            <label>Режиссеры (через запятую)</label>
            <input type="text" name="director" required>

            <label>Год выпуска</label>
            <input type="number" name="released" required>

            <label>Страна</label>
            <input type="text" name="country" required>

            <label>Жанры</label>
            <input type="text" name="genre" required>

            <label>Цена билета (Детский)</label>
            <input type="number" name="price_child">

            <label>Цена билета (Взрослый)</label>
            <input type="number" name="price_adult" required>

            <label>Дата показа фильма в кинотеатре</label>
            <input type="date" name="show_date" required>

            <label>Время показа фильма в кинотеатре</label>
            <input type="time" name="show_time" required>

            <label>Обложка фильма</label>
            <input type="file" name="image" required>

            <button type="submit" name="createFilm" class="button-login">Создать фильм</button>

        </form>
    </div>
</div>