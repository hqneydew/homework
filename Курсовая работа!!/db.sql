-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 10 2024 г., 20:42
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `psychology`
--

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `role_id` int NOT NULL,
  `role_name` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `role_id`) VALUES
(1, 'алиса', 'bikmeeva.04@mail.ru', '$2y$10$Q1ncLcUBXv0Ctt5bEOBlX.MPquXzvGvPwnnRgoHqI9Dsm/XgUtAoG', 1),
(2, 'марина', 'marina@mail.ru', '$2y$10$5tjFIUGiZc2FODY7xtDOGeayINAmeqthvGHR1UzvK9ysk.7dKMUD2', 2),
(4, 'ярослава', 'mihyar@mail.ru', '$2y$10$nJRQUNxt1CNzJeOkl1rGTeoeAUjrJS4hMLx3M9TIFfb5OrNOmXoqq', 1),
(6, 'григорий', 'gribgoriy@mail.ru', '$2y$10$6hudFarmWh/x5S2vsGb93.WZyAUlQO7GEu9x1cboLybYLEzhpMkxq', 2),
(7, 'роман', 'roma@mail.ru', '$2y$10$94IhacfOcmi40s5bTE3dC.vW.nwkb87gWX2xzqlBg/QdEMa6K.sZO', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
