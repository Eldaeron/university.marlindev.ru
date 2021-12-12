-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 12 2021 г., 12:38
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `task7`
--

-- --------------------------------------------------------

--
-- Структура таблицы `team`
--

CREATE TABLE `team` (
  `id` int NOT NULL,
  `author` varchar(64) NOT NULL,
  `position` varchar(64) NOT NULL,
  `src` varchar(64) NOT NULL,
  `alt` varchar(64) NOT NULL,
  `twitter_href` varchar(64) NOT NULL,
  `twitter_title` varchar(64) NOT NULL,
  `email_href` varchar(64) NOT NULL,
  `email_title` varchar(64) NOT NULL,
  `banned` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `team`
--

INSERT INTO `team` (`id`, `author`, `position`, `src`, `alt`, `twitter_href`, `twitter_title`, `email_href`, `email_title`, `banned`) VALUES
(1, 'Sunny A. (UI/UX Expert)', 'Lead Author', 'img/demo/authors/sunny.png', 'Sunny A.', 'https://twitter.com/@myplaneticket', '@myplaneticket', 'https://wrapbootstrap.com/user/myorange', 'Contact Sunny', 0),
(2, 'Jos K. (ASP.NET Developer)', 'Partner &amp; Contributor', 'img/demo/authors/josh.png', 'Jos K.', 'https://twitter.com/@atlantez', '@atlantez', 'https://wrapbootstrap.com/user/Walapa', 'Contact Jos', 0),
(3, 'Jovanni L. (PHP Developer)', 'Partner &amp; Contributor', 'img/demo/authors/jovanni.png', 'Jovanni Lo', 'https://twitter.com/@lodev09', '@lodev09', 'https://wrapbootstrap.com/user/lodev09', 'Contact Jovanni', 1),
(4, 'Roberto R. (Rails Developer)', 'Partner &amp; Contributor', 'img/demo/authors/roberto.png', 'Roberto R.', 'https://twitter.com/@sildur', '@sildur', 'https://wrapbootstrap.com/user/sildur', 'Contact Roberto', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `team`
--
ALTER TABLE `team`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
