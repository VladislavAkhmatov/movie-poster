-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 30 2024 г., 08:54
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `films`
--

-- --------------------------------------------------------

--
-- Структура таблицы `film`
--

CREATE TABLE `film` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `duration` int NOT NULL,
  `director` varchar(255) NOT NULL,
  `released` year NOT NULL,
  `country` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price_child` int DEFAULT '1500',
  `price_adult` int DEFAULT '2000',
  `show_date` date DEFAULT NULL,
  `show_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `film`
--

INSERT INTO `film` (`id`, `name`, `duration`, `director`, `released`, `country`, `genre`, `image`, `price_child`, `price_adult`, `show_date`, `show_time`) VALUES
(1, 'Дюна', 180, 'Дени Вильнёв', 2021, 'США', 'Фантастика', 'duna.jpg', 1500, 2000, NULL, NULL),
(2, 'Аватар', 162, 'Джеймс Кэмерон', 2009, 'США', 'фантастика, боевик, драма, приключения', 'avatar.jpg', 1500, 2000, NULL, NULL),
(20, 'Кабанэри железной крепости', 384, ' Хироюки Танака, Хиронори Аояги, Хитоми Эдзоэ', 2016, 'Япония', ' аниме, мультфильм, боевик, фэнтези, ужасы', 'Kabaneri_of_the_Iron_Fortress_promotional_image.jpg', 800, 1600, '2024-05-02', '11:45:00'),
(21, 'Кабанэри железной крепости', 384, ' Хироюки Танака, Хиронори Аояги, Хитоми Эдзоэ', 2016, 'Япония', ' аниме, мультфильм, боевик, фэнтези, ужасы', 'Kabaneri_of_the_Iron_Fortress_promotional_image.jpg', 900, 1600, '2024-05-02', '16:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `ticket`
--

CREATE TABLE `ticket` (
  `id` int NOT NULL,
  `film_id` int NOT NULL,
  `hall` varchar(255) NOT NULL,
  `count` int DEFAULT '1',
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ticket`
--

INSERT INTO `ticket` (`id`, `film_id`, `hall`, `count`, `type`) VALUES
(1, 1, 'Зал 1', 1, 'Детский');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `firstname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `patronymic` varchar(255) DEFAULT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `lastname`, `firstname`, `patronymic`, `login`, `pass`, `role`) VALUES
(1, 'testLastname', 'testName', 'testPatr', 'testLogin', 'testPass', 'user'),
(16, NULL, NULL, NULL, 'akhmatov.vla@mail.ru', '$2y$10$Tz5KBKm/mEqOdrLuwee5x.0X3MhhmQsbtH6w06XQpXZ3CkNShOjca', 'user'),
(17, 'Владислав', 'Ахматов', 'Витальевич', 'akhmatov.vladislav@mail.ru', '$2y$10$G7oLHvaApgCoqh4qfkej0eWf3/.7Zzf/TYxSDnlZcH2PaHoMR7AuC', 'user'),
(18, 'test', 'test', '', 'akhmatov.vlad@mail.ru', '$2y$10$zv6wYOzjoBEUWrSW2HGlz.gf611aCDtuKacEm30NHJI4/JA1P.oeC', 'user'),
(19, 'asdasd', 'asdasd', 'asdasd', 'asd@local.kz', '$2y$10$n15hi9xe4hRnDBKjBR.AQOvHq2h1y/wZwgbNqKY.vipx2TCs3jpgG', 'user'),
(20, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'as@local.kz', '$2y$10$qMPrNxckEhjwpUSxQANAAOgU8p8N7X3XBJNzWPTXnRn1XKhazYfjm', 'user'),
(21, 'test', 'tests', 'test', 'test@local.kz', '$2y$10$JhtmQ6I5jfoVc/6ZGqV9eO3a/LHf2GMJ6Ot4irwVSTGFcEaPYbT4e', 'user'),
(22, 'asdsadasd', 'asdsadasd', 'asdsadasd', 'asdsadasd@mail.ru', '$2y$10$Y1xGlTHZ/Ko3m24sG.3g0uCnCZXXdh2HgNoOR7pYOdmsvtjoruqW2', 'user'),
(23, '123', '123', '123', '123456@local.kz', '$2y$10$zrHpy/zYXJjPLjA4HFAbcO7Qn71HnH6u1FsNQrTQSy3xHnfKeHr8e', 'user'),
(24, 'test', 'test', 'test', 'test1234@mail.ru', '$2y$10$qHhbkQ3eH1OcP0gGqkyc2eAkOUmxc29HyTU4aaiaxBxtJSd9Yfs6i', 'user'),
(25, 'test1234', 'test1234', 'test1234', 'test1234@local.kz', '$2y$10$Z8qa0OlwaEA/9ZMMJvx5pec9odWvd1PYRW2h.14tbODq8d1cE/Wd.', 'user'),
(26, 'admin', 'admin', 'admin', 'admin@local.kz', '$2y$10$Z8qa0OlwaEA/9ZMMJvx5pec9odWvd1PYRW2h.14tbODq8d1cE/Wd.', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_id` (`film_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `film`
--
ALTER TABLE `film`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
