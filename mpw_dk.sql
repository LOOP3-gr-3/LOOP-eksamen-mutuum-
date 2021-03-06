-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1:3306
-- Genereringstid: 27. 11 2019 kl. 13:56:15
-- Serverversion: 5.7.26
-- PHP-version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mpw_dk`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `beloeb`
--

DROP TABLE IF EXISTS `beloeb`;
CREATE TABLE IF NOT EXISTS `beloeb` (
  `beloeb_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `beloeb` int(10) NOT NULL,
  `value` varchar(3) NOT NULL DEFAULT 'DKK',
  PRIMARY KEY (`beloeb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `beloeb`
--

INSERT INTO `beloeb` (`beloeb_id`, `beloeb`, `value`) VALUES
(1, 500, 'DKK'),
(2, 1000, 'DKK'),
(3, 1500, 'DKK'),
(4, 2000, 'DKK'),
(5, 2500, 'DKK'),
(6, 3000, 'DKK'),
(7, 3500, 'DKK'),
(8, 4000, 'DKK'),
(9, 4500, 'DKK'),
(10, 5000, 'DKK'),
(11, 5500, 'DKK'),
(12, 6000, 'DKK'),
(13, 6500, 'DKK'),
(14, 7000, 'DKK'),
(15, 7500, 'DKK'),
(16, 8000, 'DKK'),
(17, 8500, 'DKK'),
(18, 9000, 'DKK'),
(19, 9500, 'DKK'),
(20, 10000, 'DKK'),
(21, 10500, 'DKK'),
(22, 11000, 'DKK'),
(23, 11500, 'DKK'),
(24, 12000, 'DKK'),
(25, 12500, 'DKK'),
(27, 13000, 'DKK'),
(28, 13500, 'DKK'),
(29, 14000, 'DKK'),
(30, 14500, 'DKK'),
(31, 15000, 'DKK');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `betalings_status`
--

DROP TABLE IF EXISTS `betalings_status`;
CREATE TABLE IF NOT EXISTS `betalings_status` (
  `betalings_status_id` int(10) NOT NULL AUTO_INCREMENT,
  `bindingsperiode_id` tinyint(4) NOT NULL,
  `status` int(10) NOT NULL,
  `afviklet` varchar(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`betalings_status_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `bindingsperiode`
--

DROP TABLE IF EXISTS `bindingsperiode`;
CREATE TABLE IF NOT EXISTS `bindingsperiode` (
  `bindingsperiode_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `loebetid` int(4) NOT NULL,
  `value` varchar(5) NOT NULL DEFAULT 'mdr',
  PRIMARY KEY (`bindingsperiode_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `bindingsperiode`
--

INSERT INTO `bindingsperiode` (`bindingsperiode_id`, `loebetid`, `value`) VALUES
(1, 1, 'måned'),
(2, 2, 'mdr'),
(3, 3, 'mdr'),
(4, 4, 'mdr'),
(5, 5, 'mdr'),
(6, 6, 'mdr'),
(7, 7, 'mdr'),
(8, 8, 'mdr'),
(9, 9, 'mdr'),
(10, 10, 'mdr'),
(11, 11, 'mdr'),
(12, 12, 'mdr'),
(13, 13, 'mdr'),
(14, 14, 'mdr'),
(15, 15, 'mdr'),
(16, 16, 'mdr'),
(17, 17, 'mdr'),
(18, 18, 'mdr'),
(19, 19, 'mdr'),
(20, 20, 'mdr'),
(21, 21, 'mdr'),
(22, 22, 'mdr'),
(23, 23, 'mdr'),
(24, 24, 'mdr'),
(25, 25, 'mdr'),
(26, 26, 'mdr'),
(27, 27, 'mdr'),
(28, 28, 'mdr'),
(29, 29, 'mdr'),
(30, 30, 'mdr'),
(31, 31, 'mdr'),
(32, 32, 'mdr'),
(33, 33, 'mdr'),
(34, 34, 'mdr'),
(35, 35, 'mdr'),
(36, 36, 'mdr'),
(37, 37, 'mdr'),
(38, 38, 'mdr'),
(39, 39, 'mdr'),
(40, 40, 'mdr'),
(41, 41, 'mdr'),
(42, 42, 'mdr'),
(43, 43, 'mdr'),
(44, 44, 'mdr'),
(45, 45, 'mdr'),
(46, 46, 'mdr'),
(47, 47, 'mdr'),
(48, 48, 'mdr'),
(49, 49, 'mdr'),
(50, 50, 'mdr'),
(51, 51, 'mdr'),
(52, 52, 'mdr'),
(53, 53, 'mdr'),
(54, 54, 'mdr'),
(55, 55, 'mdr'),
(56, 56, 'mdr'),
(57, 57, 'mdr'),
(58, 58, 'mdr'),
(59, 59, 'mdr'),
(60, 60, 'mdr');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kontrakt`
--

DROP TABLE IF EXISTS `kontrakt`;
CREATE TABLE IF NOT EXISTS `kontrakt` (
  `kontrakt_id` int(10) NOT NULL AUTO_INCREMENT,
  `laangiver_user_id` int(10) NOT NULL,
  `laantager_user_id` int(10) NOT NULL,
  `kredit_id` tinyint(4) NOT NULL,
  `kontraktbrud_id` tinyint(4) NOT NULL,
  `rente_id` tinyint(4) NOT NULL,
  `beloeb_id` tinyint(4) NOT NULL,
  `bindingsperiode_id` tinyint(4) NOT NULL,
  `maanedlig_afdrag` float NOT NULL,
  `laangiver_underskrift_id` varchar(40) DEFAULT NULL,
  `reg_underskrift_1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `laantager_underskrift_id` varchar(40) DEFAULT NULL,
  `reg_underskrift_2` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `betalings_status_id` int(10) NOT NULL,
  PRIMARY KEY (`kontrakt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `kontrakt`
--

INSERT INTO `kontrakt` (`kontrakt_id`, `laangiver_user_id`, `laantager_user_id`, `kredit_id`, `kontraktbrud_id`, `rente_id`, `beloeb_id`, `bindingsperiode_id`, `maanedlig_afdrag`, `laangiver_underskrift_id`, `reg_underskrift_1`, `laantager_underskrift_id`, `reg_underskrift_2`, `betalings_status_id`) VALUES
(1, 11, 12, 1, 1, 1, 1, 1, 100, '1', '2019-11-21 16:21:54', NULL, '2019-11-21 16:21:54', 1),
(2, 13, 11, 1, 1, 1, 1, 1, 100, '1', '2019-11-21 16:22:37', NULL, '2019-11-21 16:22:37', 1),
(3, 14, 11, 1, 1, 1, 1, 1, 100, '1', '2019-11-21 16:22:37', NULL, '2019-11-21 16:22:37', 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kontraktbrud`
--

DROP TABLE IF EXISTS `kontraktbrud`;
CREATE TABLE IF NOT EXISTS `kontraktbrud` (
  `kontraktbrud_id` tinyint(4) NOT NULL,
  `brud` varchar(80) NOT NULL,
  PRIMARY KEY (`kontraktbrud_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `kontraktbrud`
--

INSERT INTO `kontraktbrud` (`kontraktbrud_id`, `brud`) VALUES
(1, 'Løsning1'),
(2, 'Løsning2'),
(3, 'Din kontraktslige forpligtigelse overføres til \'Likvido\'');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kredit`
--

DROP TABLE IF EXISTS `kredit`;
CREATE TABLE IF NOT EXISTS `kredit` (
  `kredit_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `kreditrating` varchar(3) NOT NULL,
  PRIMARY KEY (`kredit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `kredit`
--

INSERT INTO `kredit` (`kredit_id`, `kreditrating`) VALUES
(1, 'AAA'),
(2, 'AA'),
(3, 'A'),
(4, 'B'),
(5, 'C');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `rente`
--

DROP TABLE IF EXISTS `rente`;
CREATE TABLE IF NOT EXISTS `rente` (
  `rente_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `rente` float NOT NULL,
  `value` varchar(1) NOT NULL DEFAULT '%',
  PRIMARY KEY (`rente_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `rente`
--

INSERT INTO `rente` (`rente_id`, `rente`, `value`) VALUES
(1, 0.5, '%'),
(2, 1, '%'),
(3, 1.5, '%'),
(4, 2, '%'),
(5, 2.5, '%'),
(6, 3, '%'),
(7, 3.5, '%'),
(8, 4, '%'),
(9, 4.5, '%'),
(10, 5, '%'),
(11, 5.5, '%'),
(12, 6, '%'),
(13, 6.5, '%'),
(14, 7, '%'),
(15, 7.5, '%'),
(16, 8, '%'),
(17, 8.5, '%'),
(18, 9, '%'),
(19, 9.5, '%'),
(20, 10, '%'),
(21, 10.5, '%'),
(22, 11, '%'),
(23, 11.5, '%'),
(24, 12, '%'),
(25, 12.5, '%'),
(26, 13, '%'),
(27, 13.5, '%'),
(28, 14, '%'),
(29, 14.5, '%'),
(30, 15, '%'),
(31, 15.5, '%'),
(32, 16, '%'),
(33, 16.5, '%'),
(34, 17, '%'),
(35, 17.5, '%'),
(36, 18, '%'),
(37, 18.5, '%'),
(38, 19, '%'),
(39, 19.5, '%'),
(40, 20, '%'),
(41, 0, '%');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `underskrift`
--

DROP TABLE IF EXISTS `underskrift`;
CREATE TABLE IF NOT EXISTS `underskrift` (
  `underskrift_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `type` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`underskrift_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `underskrift`
--

INSERT INTO `underskrift` (`underskrift_id`, `type`) VALUES
(1, 'Nej'),
(2, 'Ja');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `fornavn` varchar(40) NOT NULL,
  `efternavn` varchar(40) NOT NULL,
  `mobil` int(12) NOT NULL,
  `mail` varchar(80) NOT NULL,
  `password` varchar(200) NOT NULL,
  `kredit_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`user_id`, `fornavn`, `efternavn`, `mobil`, `mail`, `password`, `kredit_id`) VALUES
(10, 'Mikkel', 'holt', 22345578, '1', '1', 1),
(11, 'Mette', 'Weyergang', 21020111, 'lol@lol.dk', '$2y$10$ByXvHDzgHbO1GHwS.ThPP.RVsscB/15LoqPe5Ul2KulRplT8mpYci', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
