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
  `Position` varchar(50) NOT NULL,
  `StandortNr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `person`
--
INSERT INTO `person` (`PersNr`, `Name`, `Vorname`, `Benutzername`, `Passwort`, `Position`, `StandortNr`) VALUES
(1, 'Meier', 'Peter', 'gf1', '202cb962ac59075b964b07152d234b70', 'Geschaeftsfuehrung', 1),
(2, 'Schmidt', 'Herbert', 'lf1', '202cb962ac59075b964b07152d234b70', 'Lieferant', 1),
(3, 'Maler', 'Ignaz', 'vk1', '202cb962ac59075b964b07152d234b70', 'Verkaeufer', 3);

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