-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 09 2021 г., 22:44
-- Версия сервера: 5.7.33
-- Версия PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `basex`
--

-- --------------------------------------------------------

--
-- Структура таблицы `autho`
--

CREATE TABLE `autho` (
  `id` int(1) NOT NULL,
  `authoid` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(6) NOT NULL,
  `del` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unamefolder` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namefolder` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkcopy` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` smallint(10) UNSIGNED DEFAULT NULL,
  `previewfolder` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sizepb` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sizepmb` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tablefiles`
--

CREATE TABLE `tablefiles` (
  `id` int(6) NOT NULL,
  `del` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkf` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compnamef` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previewf` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namef` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdata` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mcamera` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diafragme` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iso` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `focus` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expo` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aperture` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacturer` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expomet` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sizefb` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sizefmb` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `autho`
--
ALTER TABLE `autho`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tablefiles`
--
ALTER TABLE `tablefiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `autho`
--
ALTER TABLE `autho`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `tablefiles`
--
ALTER TABLE `tablefiles`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
