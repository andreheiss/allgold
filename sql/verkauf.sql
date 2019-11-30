SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

--
-- Tabellenstruktur für Tabelle `verkauf`
--
CREATE TABLE `verkauf`(
  `StandortNr` int(11) NOT NULL,
  `PersNr` int(11) NOT NULL,
  `ArtikelNr` int(11) NOT NULL,
  `Anzahl` int(11) NOT NULL,
  `Datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indizes für die Tabelle `verkauf`
--
ALTER TABLE `verkauf`
  ADD PRIMARY KEY (`StandortNr`,`PersNr`,`ArtikelNr`,`Anzahl`),
  ADD KEY `fk_inventarPerson` (`PersNr`),
  ADD KEY `fk_inventarArtikel` (`ArtikelNr`);