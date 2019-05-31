-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Май 30 2019 г., 15:58
-- Версия сервера: 5.7.26-0ubuntu0.18.04.1
-- Версия PHP: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Picture`
--

CREATE TABLE `Picture` (
  `id` int(11) NOT NULL,
  `src_small` varchar(200) NOT NULL DEFAULT 'images/small/',
  `src_big` varchar(200) NOT NULL DEFAULT 'images/big/',
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `views` int(11) DEFAULT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Picture`
--

INSERT INTO `Picture` (`id`, `src_small`, `src_big`, `name`, `size`, `views`, `date_create`) VALUES
(1, 'images/small/', 'images/big/', '1.jpg', 1, 5, '2019-04-14 15:21:45'),
(2, 'images/small/', 'images/big/', '2.jpg', 1, 5, '2019-04-14 15:28:20'),
(3, 'images/small/', 'images/big/', '3.jpg', 1, 4, '2019-04-14 15:28:46'),
(4, 'images/small/', 'images/big/', '4.jpg', 1, 6, '2019-04-14 15:44:15'),
(5, 'images/small/', 'images/big/', '5.jpg', 1, 6, '2019-04-14 15:45:52'),
(6, 'images/small/', 'images/big/', '6.jpg', 1, 6, '2019-04-14 15:45:53'),
(7, 'images/small/', 'images/big/', '7.jpg', 1, 6, '2019-04-14 15:45:53'),
(8, 'images/small/', 'images/big/', '8.jpg', 1, 11, '2019-04-14 15:45:53'),
(9, 'images/small/', 'images/big/', '9.jpg', 1, 12, '2019-04-14 15:45:53');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Picture`
--
ALTER TABLE `Picture`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Picture`
--
ALTER TABLE `Picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
