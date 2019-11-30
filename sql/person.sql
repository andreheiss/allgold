SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

--
-- Tabellenstruktur für Tabelle `person`
--
CREATE TABLE `person` (
  `PersNr` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Vorname` varchar(50) NOT NULL,
  `Benutzername` varchar(20) NOT NULL,
  `Passwort` longtext NOT NULL,
  `Position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `person`
--
INSERT INTO `person` (`PersNr`, `Name`, `Vorname`, `Benutzername`, `Passwort`, `Position`) VALUES
(1, 'Meier', 'Peter', 'meipe', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'Geschaeftsfuerung'),
(2, 'Schmidt', 'Herbert', 'schhe', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'Lieferant'),
(3, 'Maler', 'Ignaz', 'malig', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'Verkaeufer');

--
-- Indizes für die Tabelle `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`PersNr`);

--
-- AUTO_INCREMENT für Tabelle `person`
--
ALTER TABLE `person`
  MODIFY `PersNr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;