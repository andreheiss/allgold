SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

--
-- Tabellenstruktur für Tabelle `befuellung`
--
CREATE TABLE `befuellung` (
  `PersNr` int(11) NOT NULL,
  `StandortNr` int(11) NOT NULL,
  `ArtikelNr` int(11) NOT NULL,
  `Anzahl` int(11) NOT NULL,
  `Datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `befuellung`
--
INSERT INTO `befuellung` (`PersNr`, `StandortNr`, `ArtikelNr`, `Anzahl`, `Datum`) VALUES
(2, 1, 2, 5, '2019-11-24'),
(2, 1, 4, 20, '2019-11-24'),
(4, 9, 9, 60, '2019-11-24'),
(5, 8, 8, 15, '2019-11-24');

--
-- Indizes für die Tabelle `befuellung`
--
ALTER TABLE `befuellung`
  ADD PRIMARY KEY (`PersNr`,`StandortNr`,`ArtikelNr`,`Anzahl`),
  ADD KEY `fk_verkauf` (`StandortNr`),
  ADD KEY `fk_inventarArtikel` (`ArtikelNr`);