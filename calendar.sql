-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 11 apr 2018 om 08:10
-- Serverversie: 5.6.37
-- PHP-versie: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendar`
--
CREATE DATABASE IF NOT EXISTS `calendar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `calendar`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `birthdays`
--

DROP TABLE IF EXISTS `birthdays`;
CREATE TABLE IF NOT EXISTS `birthdays` (
  `id` int(11) NOT NULL,
  `person` varchar(255) NOT NULL,
  `day` tinyint(4) NOT NULL,
  `month` tinyint(4) NOT NULL,
  `year` smallint(6) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `birthdays`
--

INSERT INTO `birthdays` (`id`, `person`, `day`, `month`, `year`) VALUES
(1, 'Vera', 5, 8, 1963),
(3, 'Petrov', 7, 12, 1985),
(4, 'Anoushkaaa', 22, 2, 1943),
(5, 'Dimitri', 21, 5, 2001),
(7, 'Miroslav', 17, 7, 2010),
(8, 'Vesela', 14, 5, 1992),
(9, 'Vlad', 18, 3, 1975),
(11, 'Goran', 19, 12, 2006),
(14, 'Dragoslav', 13, 6, 1982),
(15, 'Godemir', 9, 9, 1984),
(16, 'Boris', 19, 4, 2001),
(17, 'Ludmila', 5, 5, 1969),
(18, 'Stanibor', 14, 5, 1999);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `birthdays`
--
ALTER TABLE `birthdays`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `birthdays`
--
ALTER TABLE `birthdays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
