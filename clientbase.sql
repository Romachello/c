-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 03 2023 г., 23:54
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `clientbase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clientbaza`
--

CREATE TABLE `clientbaza` (
  `id` int NOT NULL,
  `rayon` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telefon` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `kolichestvoKomnat` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `adres` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `uenaprodavua` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `srok` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `project` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dogovor` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dataZakluchDogovora` date NOT NULL,
  `kommisionnue` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `opisanie` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `oChemRazg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sledSuenarii` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `zvonok1` date NOT NULL,
  `zvonok2` date NOT NULL,
  `zvonok3` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `clientbaza`
--

INSERT INTO `clientbaza` (`id`, `rayon`, `telefon`, `kolichestvoKomnat`, `adres`, `uenaprodavua`, `srok`, `project`, `dogovor`, `dataZakluchDogovora`, `kommisionnue`, `opisanie`, `oChemRazg`, `sledSuenarii`, `zvonok1`, `zvonok2`, `zvonok3`) VALUES
(10, '', '', '', '', '', '', '', 'yes', '1970-01-01', '100%', '', '', '', '1970-01-01', '1970-01-01', '1970-01-01'),
(11, 'gaexcvvvvvvvvvvvvvvvvvvvvvvvvvvvv', 'xcvvvvvvv', '2', 'cvxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '100000000000000', '3 ujlg', 'yes', 'no', '2023-09-11', '5%', 'fF LJDSHFOAUSHFUHASHF AUSHFUAH SFUOASUHF ASUDFHASDFUHSUFHASUHFUASFASHFUHASUFASHFHUASHDFUASFHSAUDFASUFASHUFASUDFHSDAUHFSUDFHASUDFUS D FHDFSU', 'SDFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF', 'SDFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF', '1970-01-01', '1970-01-01', '1970-01-01'),
(12, '', '', '', '', '', '', '', 'yes', '1970-01-01', '100%', '', '', '', '1970-01-01', '1970-01-01', '1970-01-01'),
(13, '', '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '1970-01-01', '1970-01-01', '1970-01-01'),
(14, '', '', '3', '', '', '', '', 'yes', '2023-09-07', '5%', '', '', '', '1970-01-01', '1970-01-01', '1970-01-01'),
(15, '', '', '', '', '', '', '', 'yes', '1970-01-01', '100%', '', '', '', '1970-01-01', '1970-01-01', '1970-01-01'),
(16, '', '', '3', '', '', '', '', 'yes', '1970-01-01', '100%', '', '', '', '1970-01-01', '1970-01-01', '1970-01-01');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `clientbaza`
--
ALTER TABLE `clientbaza`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `clientbaza`
--
ALTER TABLE `clientbaza`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
