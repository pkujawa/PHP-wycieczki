-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Cze 2020, 16:15
-- Wersja serwera: 5.7.17
-- Wersja PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
drop database if exists wakacje;
create database wakacje;
use wakacje;
--
-- Baza danych: `wakacje`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezerwacje`
--

CREATE TABLE `rezerwacje` (
  `imie` varchar(20) NOT NULL,
  `nazwisko` varchar(20) NOT NULL,
  `kraj` varchar(35) NOT NULL,
  `kwota` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wycieczki`
--

CREATE TABLE `wycieczki` (
  `kraj` varchar(35) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `cena` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `wycieczki`
--

INSERT INTO `wycieczki` (`kraj`, `data`, `cena`) VALUES
('Brazylia', '2020-12-07', 4246),
('Francja', '2021-03-04', 1382),
('Rumunia', '2021-04-24', 1020),
('Budapeszt', '2021-05-15', 1653),
('Chorwacja', '2021-04-07', 1600),
('Czechy', '2020-10-22', 965),
('Holandia', '2021-04-17', 2650),
('Gruzja', '2021-04-05', 2789),
('Tajlandia', '2020-03-13', 4836),
('Japonia', '2021-09-17', 11250);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

use wakacje;
select * from wycieczki;