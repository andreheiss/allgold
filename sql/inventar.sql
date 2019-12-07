SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

--
-- Tabellenstruktur für Tabelle `inventar`
--
CREATE TABLE `inventar` (
  `InventarNr` int(11) NOT NULL,
  `StandortNr` int(11) NOT NULL,
  `ArtikelNr` int(11) NOT NULL,
  `StueckzahlIST` int(11) NOT NULL CHECK ((`StueckzahlIST` >= 0)),
  `StueckzahlSOLL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `inventar`
--
INSERT INTO `inventar` (`InventarNr`, `StandortNr`, `ArtikelNr`, `StueckzahlIST`, `StueckzahlSOLL`) VALUES
(1, 1, 1, 5, 10),
(2, 1, 2, 5, 10),
(3, 1, 3, 5, 15),
(4, 1, 4, 5, 10),
(5, 1, 5, 5, 20),
(6, 1, 6, 5, 10),
(7, 1, 7, 5, 10),
(8, 1, 8, 5, 15),
(9, 1, 9, 5, 10),
(10, 1, 10, 5, 20),
(11, 1, 11, 5, 10),
(12, 1, 12, 5, 10),
(13, 1, 13, 5, 15),
(14, 1, 14, 5, 10),
(15, 1, 15, 5, 20),
(16, 1, 16, 5, 20),
(17, 1, 17, 5, 20),
(18, 1, 18, 5, 20),
(19, 1, 19, 5, 20),
(20, 1, 20, 5, 20);

--
-- Indizes für die Tabelle `inventar`
--
ALTER TABLE `inventar`
  ADD PRIMARY KEY (`InventarNr`);

--
-- AUTO_INCREMENT für Tabelle `inventar`
--
ALTER TABLE `inventar`
  MODIFY `InventarNr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;