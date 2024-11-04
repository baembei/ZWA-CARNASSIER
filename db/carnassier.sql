-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 04 2024 г., 02:13
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `carnassier`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `title` enum('mr','ms') NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `country` varchar(3) NOT NULL,
  `password` varchar(50) NOT NULL,
  `offers_consent` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role`, `title`, `first_name`, `last_name`, `email`, `birth_date`, `country`, `password`, `offers_consent`, `created_at`) VALUES
(4, 'user', 'ms', 'Anna', 'Lim', 'lim@gmailewe.com', '1938-10-16', 'KAZ', '$2y$10$/cOS0kjOezB5/jfS46DrpOqierR2i60Zc2jnPG4tWrG', 0, '2024-10-16 04:26:34'),
(5, 'user', 'mr', 'Anna', 'Lik', 'lim@gmailqewe.com', '1932-10-16', 'KAZ', '$2y$10$8vkVMJSSI0SmawVEmP65X.j6YVdCVjeWQ/uwu0NlPim', 1, '2024-10-16 04:27:39'),
(6, 'user', 'mr', 'Alish', 'Alish', 'alish@gm.com', '2009-12-30', 'KAZ', '$2y$10$yntFiGiXnONkpQN4jXCy6OKOIRRVMqoNA0wtYDXZlZ6', 1, '2024-10-16 04:29:45'),
(7, 'user', 'ms', 'Amelue', 'Ameliur', 'sad@amelir.com', '2009-12-15', 'KAZ', '$2y$10$qVLD0W7U.3.IAW4tXUjknOYn2J7v7UodsD7E6Nl2bMN', 0, '2024-10-16 04:40:42'),
(8, 'admin', '', 'Ester', 'Admin', 'admin@example.com', '2001-09-30', 'KAZ', '$2y$10$8hJdKdPHxjb6L0VvaBicuOmudR5Ho1q93QcnP6POlhR', 0, '2024-10-29 00:14:48'),
(9, 'user', 'mr', 'amadeus', 'amadeus', 'amadeus@gmail.com', '2007-01-15', 'KAZ', '$2y$10$UgF21nezVtjiCe1WJyKhKOb4iyxcNMG8g2yQao5IwFD', 0, '2024-10-29 00:38:57'),
(11, 'user', 'mr', 'Eric', 'Ririri', 'eric@gmail.com', '2000-09-12', 'KAZ', '$2y$10$o6UNCOTpaWTQtipBdNi2Bu0lvX7urJOir4OMez2E.7j', 0, '2024-10-29 00:46:18'),
(12, 'user', 'mr', 'Darius', 'Lorem', 'darius@gmail.com', '1999-09-15', 'KAZ', '$2y$10$e3A0raWm2jaHPvndGLYfCeJczp/OKOSxlc55xtgWyON', 1, '2024-10-29 01:15:35'),
(13, 'user', 'mr', 'Jolo', 'Jolo', 'jolo@gmail.com', '1999-12-16', 'KAZ', '$2y$10$hLGazCQ3d4u5Pl.S2eqXIOkZCjTMLFLghmt/qvceQwg', 1, '2024-10-29 01:26:18'),
(15, 'user', 'mr', 'Joloq', 'Joloq', 'joloq@gmail.com', '1999-12-16', 'KAZ', '$2y$10$a3sVdhIDvLvl3vFmYPECvOeOYohvcc3DxmU1hKjUHvT', 1, '2024-10-29 01:27:30'),
(16, 'user', 'mr', 'Yoiy', 'Yoyo', 'oyoy@gmail.com', '2006-09-11', 'KAZ', '$2y$10$mm4AWLY9a6imvjjT.TZpk.y7cpXymNw5ATk2ya.HrEP', 0, '2024-10-29 01:29:05'),
(17, 'user', 'mr', 'Gogu', 'Gira', 'gogu@gmail.com', '1944-11-17', 'KAZ', '$2y$10$2q.4NnSvddM6Sd0hxSG7nO/GPY/CdH8sLKoFzNWvJl7', 1, '2024-10-29 03:03:13'),
(18, 'user', 'ms', 'Ester', 'Carnassier', 'ester2001@gmail.com', '2001-09-30', 'KAZ', '$2y$10$S4aUFVWvYSyX7DtI.g7a/e37U2ZZgbf90ZmtEVF7LYh', 0, '2024-10-29 14:21:22'),
(20, 'user', 'mr', 'Mister', 'Robot', 'robot@gmail.com', '1969-10-16', 'CZE', '$2y$10$QxaLzJ0j9f.9imW.WitCTO0UpkakqIEujJLPTmy..Sr', 0, '2024-10-29 14:56:04'),
(22, 'user', 'mr', 'Rollo', 'Daaar', 'rolo@gmail.com', '1942-10-17', 'KAZ', '$2y$10$q6kDs0zoAzIV.qcjonfNmeigHh5X9VE3o4b//VjqDCx', 0, '2024-10-29 15:33:29'),
(23, 'user', 'mr', 'Kika', 'Kikovic', 'kikovic@gmail.com', '1941-11-16', 'KAZ', '$2y$10$bTv6nCd72Fi9hOL0DQJs.OdN0Sk85u2j2gZqv5KpiCi', 0, '2024-10-29 16:36:13');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
