SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

--
-- Tabellenstruktur für Tabelle `befuellung`
--
CREATE TABLE `befuellung` (
	`BefuellungNr` int(11) NOT NULL,
	`PersNr` int(11) NOT NULL,
	`StandortNr` int(11) NOT NULL,
	`ArtikelNr` int(11) NOT NULL,
	`Anzahl` int(11) NOT NULL,
	`Datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `befuellung`
--
INSERT INTO `befuellung` (`BefuellungNr`, `PersNr`, `StandortNr`, `ArtikelNr`, `Anzahl`, `Datum`) VALUES
(1, 2, 1, 2, 5, '2019-11-24'),
(2, 2, 1, 4, 20, '2019-11-24'),
(3, 4, 9, 9, 60, '2019-11-24'),
(4, 5, 8, 8, 15, '2019-11-24');

--
-- Indizes für die Tabelle `befuellung`
--
ALTER TABLE `befuellung`
	ADD PRIMARY KEY (`BefuellungNr`);
	
--
-- AUTO_INCREMENT für Tabelle `verkauf`
--
ALTER TABLE `befuellung`
	MODIFY `BefuellungNr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;