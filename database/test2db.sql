-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 20 2019 г., 20:57
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test2db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `code` varchar(12) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Дамп данных таблицы `links`
--

INSERT INTO `links` (`id`, `url`, `code`, `created`) VALUES
(1, 'https://www.youtube.com', 'ytub0', '2019-03-20 16:05:14'),
(10, 'https://github.com/AlexeyAS', '7q2/gh', '2019-03-20 21:44:31'),
(11, 'https://www.google.com/search?source=hp&ei=6o6SXOX3GYiprgSB8beIDA&q=google&oq=goo&gs_l=psy-ab.1.0.35i39l2j0i67l6j0j0i3.1467.1856..3280...0.0..0.70.231.4......0....1..gws-wiz.....0..0i131i67j0i131.M_SjnJjfoLQ', '7q6/goog', '2019-03-20 22:05:37'),
(12, 'https://www.w3schools.com/php/showphp.asp?filename=demo_form_validation_complete', '7q4/w3s', '2019-03-20 21:45:03'),
(13, 'http://qaru.site/questions/230407/do-you-prefer-if-var-or-if-var-0', '7q5', '2019-03-20 22:03:24'),
(15, 'https://www.avito.ru/rossiya#login?next=%2Fadditem&s=direct', '7q7', '2019-03-20 22:07:58'),
(16, 'https://rutracker.org/forum/index.php', '7q8/rutrack', '2019-03-20 22:08:31'),
(17, 'https://webpack.js.org/guides/', '7q9/webpk', '2019-03-20 22:09:57'),
(18, 'https://spb.delivery-club.ru/prizes/', '7qa', '2019-03-20 22:10:17'),
(19, 'https://gitter.im/explore/tags/curated:frontend', '7qb/gitter', '2019-03-20 22:11:15'),
(20, 'https://capsulashop.ru/catalog/aksessuary/ryukzaki/ryukzak_dnmc_pack_chernyy/', '7qc/bag', '2019-03-20 22:12:18'),
(21, 'https://medium.com/@stepanovv.ru/%D0%BF%D1%80%D0%B0%D0%B2%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9-css-oocss-smacss-bem-%D0%B8-sass-49351a119283', '21lsw/css', '2019-03-20 22:16:21'),
(22, 'https://habr.com/ru/post/235851/', '22jas', '2019-03-20 22:17:40'),
(23, 'https://ru.bem.info/', '23jyw/bem', '2019-03-20 22:18:12'),
(24, 'https://pages.github.com/', '24wqm/gpages', '2019-03-20 22:18:34'),
(25, 'http://jigsaw.w3.org/css-validator/', '25nta/valid', '2019-03-20 22:19:04');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
