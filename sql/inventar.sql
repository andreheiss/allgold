SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

--
-- Tabellenstruktur für Tabelle `inventar`
--
CREATE TABLE `inventar` (
  `InventarNr` int(11) NOT NULL,
  `StandortNr` int(11) NOT NULL,
  `ArtikelNr` int(11) NOT NULL,
  `StueckzahlIST` int(11) NOT NULL,
  `StueckzahlSOLL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `inventar`
--
INSERT INTO `inventar` (`InventarNr`, `StandortNr`, `ArtikelNr`, `StueckzahlIST`, `StueckzahlSOLL`) VALUES
(1, 1, 1, 5, 10),
(2, 1, 2, 15, 10),
(3, 1, 3, 20, 15),
(4, 1, 4, 15, 10),
(5, 1, 5, 25, 20),
(6, 2, 1, 20, 10),
(7, 2, 2, 15, 10),
(8, 2, 3, 20, 15),
(9, 2, 4, 15, 10),
(10, 2, 5, 25, 20),
(11, 3, 1, 20, 10),
(12, 3, 2, 15, 10),
(13, 3, 3, 20, 15),
(14, 3, 4, 15, 10),
(15, 3, 5, 25, 20);

--
-- Indizes für die Tabelle `inventar`
--
ALTER TABLE `inventar`
  ADD PRIMARY KEY (`InventarNr`);

--
-- AUTO_INCREMENT für Tabelle `inventar`
--
ALTER TABLE `inventar`
  MODIFY `InventarNr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;