SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

--
-- Tabellenstruktur für Tabelle `lieferung`
--
CREATE TABLE `lieferung` (
	`LieferNr` int(11) NOT NULL,
	`StandortNr` int(11) NOT NULL,
	`PersNr` int(11) NOT NULL,
	`ArtikelNr` int(11) NOT NULL,
	`Anzahl` int(11) NOT NULL,
	`Zeitpunkt` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indizes für die Tabelle `lieferung`
--
ALTER TABLE `lieferung`
	ADD PRIMARY KEY (`LieferNr`);
	
--
-- AUTO_INCREMENT für Tabelle `lieferung`
--
ALTER TABLE `lieferung`
	MODIFY `LieferNr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;