SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

--
-- Tabellenstruktur für Tabelle `verkauf`
--
CREATE TABLE `verkauf`(
	`VerkaufNr` int(11) NOT NULL,
	`StandortNr` int(11) NOT NULL,
	`PersNr` int(11) NOT NULL,
	`ArtikelNr` int(11) NOT NULL,
	`Anzahl` int(11) NOT NULL,
	`Zeitpunkt` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indizes für die Tabelle `verkauf`
--
ALTER TABLE `verkauf`
	ADD PRIMARY KEY (`VerkaufNr`);
	
--
-- AUTO_INCREMENT für Tabelle `verkauf`
--
ALTER TABLE `verkauf`
	MODIFY `VerkaufNr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;