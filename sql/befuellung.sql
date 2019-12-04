SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

--
-- Tabellenstruktur für Tabelle `befuellung`
--
CREATE TABLE `befuellung` (
	`BefuellungNr` int(11) NOT NULL,
	`PersNr` int(11) NOT NULL,
	`InventarNr` int(11) NOT NULL,
	`Datum` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indizes für die Tabelle `befuellung`
--
ALTER TABLE `befuellung`
	ADD PRIMARY KEY (`BefuellungNr`);
	
--
-- AUTO_INCREMENT für Tabelle `verkauf`
--
ALTER TABLE `befuellung`
	MODIFY `BefuellungNr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;