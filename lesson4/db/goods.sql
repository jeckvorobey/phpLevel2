-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июн 02 2019 г., 13:48
-- Версия сервера: 5.7.26-0ubuntu0.18.04.1
-- Версия PHP: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `goods`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `description`, `price`, `date_create`) VALUES
(1, 'Товар1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(2, 'Товар2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(3, 'Товар3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(4, 'Товар4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(5, 'Товар5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(6, 'Товар6', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(7, 'Товар7', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(8, 'Товар8', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(9, 'Товар9', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(10, 'Товар10', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(11, 'Товар11', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(12, 'Товар12', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(13, 'Товар13', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(14, 'Товар14', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(15, 'Товар15', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(16, 'Товар16', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(17, 'Товар17', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(18, 'Товар18', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(19, 'Товар19', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(20, 'Товар20', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(21, 'Товар21', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(22, 'Товар22', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(23, 'Товар23', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(24, 'Товар24', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(25, 'Товар25', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(26, 'Товар26', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(27, 'Товар27', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(28, 'Товар28', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(29, 'Товар29', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(30, 'Товар30', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(31, 'Товар31', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(32, 'Товар32', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(33, 'Товар33', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(34, 'Товар34', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(35, 'Товар35', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(36, 'Товар36', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(37, 'Товар37', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(38, 'Товар38', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(39, 'Товар39', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(40, 'Товар40', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(41, 'Товар41', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(42, 'Товар42', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(43, 'Товар43', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(44, 'Товар44', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(45, 'Товар45', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(46, 'Товар46', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(47, 'Товар47', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(48, 'Товар48', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(49, 'Товар49', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57'),
(50, 'Товар50', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dicta earum quos autem voluptas sapiente quisquam nihil adipisci sed perferendis.', 500, '2019-05-31 13:31:57');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
