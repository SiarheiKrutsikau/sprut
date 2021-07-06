-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 07 2021 г., 00:00
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

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `del`, `unamefolder`, `namefolder`, `linkcopy`, `quantity`, `previewfolder`, `sizepb`, `sizepmb`) VALUES
(1, NULL, '555', '8f3446875d735741ed7afe44576150ee', '1', 8, 'images/8f3446875d735741ed7afe44576150ee/preview.jpg', '96897723', '92.409');

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
  `author` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Дамп данных таблицы `tablefiles`
--

INSERT INTO `tablefiles` (`id`, `del`, `linkf`, `compnamef`, `previewf`, `namef`, `author`, `sdata`, `mcamera`, `diafragme`, `excerpt`, `iso`, `focus`, `expo`, `aperture`, `manufacturer`, `expomet`, `width`, `height`, `program`, `sizefb`, `sizefmb`, `copyright`) VALUES
(1, NULL, '1', '38693b20ed3385169adcba49d639af28.jpg', 'images/8f3446875d735741ed7afe44576150ee/38693b20ed3385169adcba49d639af28P.jpg', 'IMG_6969.jpg', 'SIARHEI KRUTSIKAU', '22 ноября 2020 Время: 10:43:16', 'Canon EOS 100D', '2.8', '1/800', '100', '24', '0', '2.970854', 'Canon', 'По шаблону', '5184', '3456', 'Приоритет диафрагмы', '14281071', '13.619', 'FACEBOOK.COM/PROFILE.PHP?ID=100012770478638'),
(2, NULL, '1', '3d5f021f29a7e7ce5c1721fab34575e4.jpg', 'images/8f3446875d735741ed7afe44576150ee/3d5f021f29a7e7ce5c1721fab34575e4P.jpg', 'IMG_6969_C.jpg', 'SIARHEI KRUTSIKAU', '22 ноября 2020 Время: 10:43:16', 'Canon EOS 100D', '2.8', '1/800', '100', '24', '0', '2.970854', 'Canon', 'По шаблону', '5184', '3456', 'Приоритет диафрагмы', '9583604', '9.140', 'FACEBOOK.COM/PROFILE.PHP?ID=100012770478638'),
(3, NULL, '1', 'ce43909d5316b2448e1edb72a6ddc8b3.jpg', 'images/8f3446875d735741ed7afe44576150ee/ce43909d5316b2448e1edb72a6ddc8b3P.jpg', 'IMG_7055.jpg', 'нет данных', '06 июля 2021 Время: 19:35:12', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'Нет данных', '5184', '3456', 'нет данных', '10856942', '10.354', 'FACEBOOK.COM/PROFILE.PHP?ID=100012770478638'),
(4, NULL, '1', '0ad88784ef7852ec9ceb2969b67ad95a.jpg', 'images/8f3446875d735741ed7afe44576150ee/0ad88784ef7852ec9ceb2969b67ad95aP.jpg', 'IMG_7056.jpg', 'нет данных', '06 июля 2021 Время: 19:35:12', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'Нет данных', '5184', '3456', 'нет данных', '12072930', '11.514', 'FACEBOOK.COM/PROFILE.PHP?ID=100012770478638'),
(5, NULL, '1', '1a303787bdd778120845df861b0826e6.jpg', 'images/8f3446875d735741ed7afe44576150ee/1a303787bdd778120845df861b0826e6P.jpg', 'IMG_7057.jpg', 'нет данных', '06 июля 2021 Время: 19:35:12', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'Нет данных', '5184', '3456', 'нет данных', '12427478', '11.852', 'FACEBOOK.COM/PROFILE.PHP?ID=100012770478638'),
(6, NULL, '1', 'e2c2ed3a3005470ef26d2797d64cf0b0.jpg', 'images/8f3446875d735741ed7afe44576150ee/e2c2ed3a3005470ef26d2797d64cf0b0P.jpg', 'IMG_7064.jpg', 'нет данных', '06 июля 2021 Время: 19:35:12', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'Нет данных', '5184', '3456', 'нет данных', '12916486', '12.318', 'FACEBOOK.COM/PROFILE.PHP?ID=100012770478638'),
(7, NULL, '1', 'dd9e6f4c55eb283aeeed2fdc1392a05b.jpg', 'images/8f3446875d735741ed7afe44576150ee/dd9e6f4c55eb283aeeed2fdc1392a05bP.jpg', 'IMG_7064_1.jpg', 'нет данных', '06 июля 2021 Время: 19:35:12', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'Нет данных', '5184', '3456', 'нет данных', '9617259', '9.172', 'FACEBOOK.COM/PROFILE.PHP?ID=100012770478638'),
(8, NULL, '1', '14b37e993510c068d527ea8a0eecf0e0.jpg', 'images/8f3446875d735741ed7afe44576150ee/14b37e993510c068d527ea8a0eecf0e0P.jpg', 'IMG_7086.jpg', 'нет данных', '06 июля 2021 Время: 19:35:12', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'нет данных', 'Нет данных', '5184', '3456', 'нет данных', '15141953', '14.440', 'FACEBOOK.COM/PROFILE.PHP?ID=100012770478638');

--
-- Индексы сохранённых таблиц
--

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
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `tablefiles`
--
ALTER TABLE `tablefiles`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
