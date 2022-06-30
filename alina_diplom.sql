-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 30 2022 г., 22:55
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `alina_diplom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `first_kurs`
--

CREATE TABLE `first_kurs` (
  `id` int NOT NULL,
  `sub_1` int NOT NULL DEFAULT '0',
  `sub_2` int NOT NULL DEFAULT '0',
  `sub_3` int NOT NULL DEFAULT '0',
  `sub_4` int NOT NULL DEFAULT '0',
  `sub_5` int NOT NULL DEFAULT '0',
  `sub_6` int NOT NULL DEFAULT '0',
  `sub_7` int NOT NULL DEFAULT '0',
  `sub_8` int NOT NULL DEFAULT '0',
  `sub_9` int NOT NULL DEFAULT '0',
  `sub_10` int NOT NULL DEFAULT '0',
  `sub_11` int NOT NULL DEFAULT '0',
  `sub_12` int NOT NULL DEFAULT '0',
  `sub_13` int NOT NULL DEFAULT '0',
  `sub_14` int NOT NULL DEFAULT '0',
  `sub_15` int NOT NULL DEFAULT '0',
  `sub_16` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `first_kurs`
--

INSERT INTO `first_kurs` (`id`, `sub_1`, `sub_2`, `sub_3`, `sub_4`, `sub_5`, `sub_6`, `sub_7`, `sub_8`, `sub_9`, `sub_10`, `sub_11`, `sub_12`, `sub_13`, `sub_14`, `sub_15`, `sub_16`) VALUES
(52, 10, 11, 10, 10, 0, 30, 50, 50, 10, 10, 10, 10, 10, 10, 10, 30),
(53, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `progress`
--

CREATE TABLE `progress` (
  `id` int NOT NULL,
  `firs_pro` int DEFAULT '0',
  `second_pro` int DEFAULT '0',
  `third_pro` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `progress`
--

INSERT INTO `progress` (`id`, `firs_pro`, `second_pro`, `third_pro`) VALUES
(52, 71, 100, 100);

-- --------------------------------------------------------

--
-- Структура таблицы `slovar`
--

CREATE TABLE `slovar` (
  `id` int NOT NULL,
  `first_word` varchar(255) NOT NULL,
  `second_word` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `data`) VALUES
(52, 'energyvk13@gmail.com', 'b67c60f6c16fe97a8270557a4db02f25', 'Admin', '2022-05-05 17:22:19'),
(63, 'fsdafasdfsdaf', 'fcea920f7412b5da7be0cf42b8c93759', 'fasdfsdafsadf', '2022-05-19 13:09:41');

--
-- Триггеры `users`
--
DELIMITER $$
CREATE TRIGGER `add_first_kurs` AFTER INSERT ON `users` FOR EACH ROW BEGIN
    INSERT INTO first_kurs SET id = NEW.id;
  END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `progress` AFTER INSERT ON `users` FOR EACH ROW BEGIN
    INSERT INTO progress SET id = NEW.id;
  END
$$
DELIMITER ;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `slovar`
--
ALTER TABLE `slovar`
  ADD UNIQUE KEY `second_word` (`second_word`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
