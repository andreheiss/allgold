SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

--
-- Tabellenstruktur für Tabelle `artikel`
--
CREATE TABLE `artikel` (
  `ArtikelNr` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Beschreibung` varchar(150) NOT NULL,
  `Kategorie` varchar(30) NOT NULL,
  `Preis` decimal(16,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `artikel`
--
INSERT INTO `artikel` (`ArtikelNr`, `Name`, `Beschreibung`, `Kategorie`, `Preis`) VALUES
(1, 'Allgaeuer Bergbutter', 'Sauerrahm', 'Butter', '2.50'),
(2, 'Allgaeuer Bergbutter', 'Sueßrahm', 'Butter', '2.50'),
(3, 'Allgaeuer Bergbutter', 'Heuaroma', 'Butter', '2.50'),
(4, 'Allgaeuer Bergbutter', 'Bergkraeuter', 'Butter', '2.50'),
(5, 'Allgaeuer Milch', 'Standard Milch', 'Milch', '1.50'),
(6, 'Fettarme Sahne', '15% Sahne', 'Sahne', '1.80'),
(7, 'Molke 1.5', 'Molke mit 1.5% Fett', 'Molke', '2.00'),
(8, 'Schmand 20', 'Schmand mit 20% Fett', 'Schmand', '1.20'),
(9, 'Joghurt Edelweiß', '3.5% Fett Joghurt', 'Joghurt', '4.00'),
(10, 'Joghurt Erdbeere', '3.5% Fett Joghurt', 'Joghurt', '4.20'),
(11, 'Joghurt Heimische Beeren', '3.5% Fett Joghurt', 'Joghurt', '4.20'),
(12, 'Joghurt Loewenzahn', '3.5% Fett Joghurt', 'Joghurt', '5.50'),
(13, 'Joghurt Kirsche', '3.5% Fett Joghurt', 'Joghurt', '4.00'),
(14, 'Joghurt Zwetschge', '3.5% Fett Joghurt', 'Joghurt', '4.10'),
(15, 'Allgaeuer Bergkaese', '2 Monate gereift', 'Kaese', '2.50'),
(16, 'Emmentaler', '4 Monate gereift', 'Kaese', '2.80'),
(17, 'Kraeuterkaese', '2 Wochen gereift', 'Kaese', '3.20'),
(18, 'Rosenkaese', '1 Monat gereift', 'Kaese', '2.90'),
(19, 'Enziankaese', '3 Wochen gereift', 'Kaese', '2.50'),
(20, 'Frischkaese 20', 'Frischkaese mit 20% Fett', 'Sonstiges', '2.00');

--
-- Indizes für die Tabelle `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`ArtikelNr`);

--
-- AUTO_INCREMENT für Tabelle `artikel`
--
ALTER TABLE `artikel`
  MODIFY `ArtikelNr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;