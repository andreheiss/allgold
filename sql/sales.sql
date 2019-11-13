-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 15. Mai 2018 um 13:13
-- Server-Version: 5.7.20-0ubuntu0.16.04.1
-- PHP-Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `grp115_IKS`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sales`
--

CREATE TABLE `sales` (
  `saleID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `sales`
--

INSERT INTO `sales` (`saleID`, `productID`, `location`, `quantity`) VALUES
(1, 1, 1, 14),
(2, 1, 2, 60),
(3, 2, 3, 60),
(4, 2, 4, 7),
(5, 3, 5, 10),
(6, 3, 6, 7),
(7, 4, 7, 21),
(8, 4, 8, 60);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`saleID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `sales`
--
ALTER TABLE `sales`
  MODIFY `saleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;