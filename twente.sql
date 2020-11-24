-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 apr 2019 om 15:07
-- Serverversie: 10.1.36-MariaDB
-- PHP-versie: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twente`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `configuratie`
--

CREATE TABLE `configuratie` (
  `id` int(11) NOT NULL,
  `gebruikersid` int(11) NOT NULL,
  `config1` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `config2` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `configuratie`
--

INSERT INTO `configuratie` (`id`, `gebruikersid`, `config1`, `config2`) VALUES
(33, 11, 'laptop', 'muis'),
(34, 12, 'auto', 'laptop'),
(35, 13, 'laptop', 'muis'),
(36, 14, 'desktop', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `incidenten`
--

CREATE TABLE `incidenten` (
  `id` int(11) NOT NULL,
  `incidentenid` varchar(30) NOT NULL,
  `incident1` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `incident2` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `incident3` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `incidenten`
--

INSERT INTO `incidenten` (`id`, `incidentenid`, `incident1`, `incident2`, `incident3`) VALUES
(0, 'V. Campbell', 'muis defect', '2019-04-25', 3),
(0, 'M. Barney', 'laptop laad niet op', '2019-04-24', 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `achternaam` varchar(32) NOT NULL,
  `afdeling` text NOT NULL,
  `intern_tel` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `achternaam`, `afdeling`, `intern_tel`) VALUES
(9, 'admin', 'admin', '', '', ''),
(11, 'V254', 'Welkom2019', 'Campbell', 'CAD', '254'),
(12, 'F235', 'Welkom2019', 'Ã‡iÃ§ek', 'Directie', '235'),
(13, 'M250', 'Welkom2019', 'Barney', 'Engeneering', '250'),
(14, 'J290', 'Welkom2019', 'Matse', 'Finaciele Administratie', '290');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `configuratie`
--
ALTER TABLE `configuratie`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `configuratie`
--
ALTER TABLE `configuratie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
