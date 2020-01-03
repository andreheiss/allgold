SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

--
-- Tabellenstruktur für Tabelle `standort`
--
CREATE TABLE `standort` (
  `StandortNr` int(11) NOT NULL,
  `Ort` varchar(50) NOT NULL,
  `Plz` varchar(10) NOT NULL,
  `Strasse` varchar(40) NOT NULL,
  `Typ` char(1) DEFAULT NULL,
  `Beschreibung` varchar(40) DEFAULT NULL,
  `LON` varchar(30) NOT NULL,
  `LAT` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `standort`
--
INSERT INTO `standort` (`StandortNr`, `Ort`, `Plz`, `Strasse`, `Typ`, `Beschreibung`, `LON`, `LAT`) VALUES
(1, 'Kempten', '87435', 'An der Sutt 13', 'V', 'Firmensitz', '47.71457225467146', '10.314338207244873'),
(2, 'Kempten', '87435', 'Ueber\'m Maeuerle 7', 'A', 'Automat', '47.72426740349347', '10.316848754882812'),
(3, 'Kaufbeuren', '87600', 'Kemptener Str 38', 'V', 'Verkaufsraum', '47.882828716292344', '10.6264343852617'),
(4, 'Memmingen', '87740', 'Ulmer Str 13', 'V', 'Verkaufsraum', '47.98036221803081', '10.1788330078125'),
(5, 'Isny', '88316', 'Wassertorstraße 37', 'A', 'Automat', '47.694697038966076', '10.038070678710938'),
(6, 'Marktoberdorf', '87616', 'Kaufbeurener Str 1', 'A', 'Automat', '47.77941861197757', '10.616891384124756'),
(7, 'Sonthofen', '87527', 'Freibadstraße 14', 'V', 'Verkaufsraum', '47.514634612973694', '10.26755619153846'),
(8, 'Oberstdorf', '87561', 'Oststraße 1', 'A', 'Automat', '47.41029678060909', '10.275293827580754'),
(9, 'Oberstaufen', '87534', 'Rainwaldstraße 2', 'A', 'Automat', '47.554643912647045', '10.022393703984562'),
(10, 'Immenstadt', '87509', 'Salzstraße 8', 'A', 'Automat', '47.560841627466885', '10.21770143561298'),
(11, 'Füssen', '87629', 'Ottostraße 7', 'V', 'Verkaufsraum', '47.569648', '10.700432800000044'),
(12, 'Lindau', '88131', 'In der Grub 34', 'V', 'Verkaufsraum', '47.550241351721596', '9.69220304476039');

--
-- Indizes für die Tabelle `standort`
--
ALTER TABLE `standort`
  ADD PRIMARY KEY (`StandortNr`);

--
-- AUTO_INCREMENT für Tabelle `standort`
--
ALTER TABLE `standort`
  MODIFY `StandortNr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;