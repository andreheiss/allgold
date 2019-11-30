SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

--
-- Tabellenstruktur für Tabelle `inventar`
--
CREATE TABLE `inventar` (
  `InventarNr` int(11) NOT NULL,
  `StandortNr` int(11) NOT NULL,
  `ArtikelNr` int(11) NOT NULL,
  `StueckzahlIST` int(11) NOT NULL,
  `StueckzahlSOLL` int(11) NOT NULL,
  `StueckzahlMAX` int(11) NOT NULL,
  `Fehlbestand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `inventar`
--
INSERT INTO `inventar` (`InventarNr`, `StandortNr`, `ArtikelNr`, `StueckzahlIST`, `StueckzahlSOLL`, `StueckzahlMAX`, `Fehlbestand`) VALUES
(1, 1, 1, 5, 10, 20, 0),
(2, 1, 2, 15, 10, 20, 0),
(3, 1, 3, 20, 15, 20, 0),
(4, 1, 4, 15, 10, 20, 0),
(5, 1, 5, 25, 20, 30, 0),
(6, 2, 1, 20, 10, 20, 0),
(7, 2, 2, 15, 10, 20, 0),
(8, 2, 3, 20, 15, 20, 0),
(9, 2, 4, 15, 10, 20, 0),
(10, 2, 5, 25, 20, 30, 0),
(11, 3, 1, 20, 10, 20, 0),
(12, 3, 2, 15, 10, 20, 0),
(13, 3, 3, 20, 15, 20, 0),
(14, 3, 4, 15, 10, 20, 0),
(15, 3, 5, 25, 20, 30, 0);

--
-- Indizes für die Tabelle `inventar`
--
ALTER TABLE `inventar`
  ADD PRIMARY KEY (`InventarNr`,`StandortNr`,`ArtikelNr`),
  ADD KEY `fk_inventarStandort` (`StandortNr`),
  ADD KEY `fk_inventarArtikel` (`ArtikelNr`);

--
-- AUTO_INCREMENT für Tabelle `inventar`
--
ALTER TABLE `inventar`
  MODIFY `InventarNr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;