<?php require("templates/header.php"); ?>

<nav>
	<ul>
		<li><a href="index.php">Startseite</a></li>
		<li><a href="verkauf.php">Verkaufserfassung</a></li>
		<li><a href="inventar.php">Inventarverwaltung</a></li>
		<li><a class="active" href="bericht.php">Berichtswesen (Reporting)</a></li>
		<li><a href="liste.php">Preislisten- und Katalogerstellung</a></li>
		<li style="float:right"><a href="login.php">Einloggen</a></li>
	</ul>
</nav>

<main>
	<fieldset>
	<legend>Datenbank auslesen</legend>
	
		<?php require("php/datenbank.php");
		
			echo('<p>Artikel</p>');
			$db_res = mysqli_query($db_link, "SELECT * FROM `artikel`") or die("Fehler: " . mysqli_error($db_link));
			
			echo('<table id = "bericht_tabellen">');
			echo('<tr>');
			echo('<th>ArtikelNr</th>');
			echo('<th>Name</th>');
			echo('<th>Beschreibung</th>');
			echo('<th>Kategorie</th>');
			echo('<th>Preis</th>');
			echo('</tr>');
			
			while($row = mysqli_fetch_array($db_res))
			{
				echo('<tr>');
				echo('<td>' . $row['ArtikelNr'] . '</td>');
				echo('<td>' . $row['Name'] . '</td>');
				echo('<td>' . $row['Beschreibung'] . '</td>');
				echo('<td>' . $row['Kategorie'] . '</td>');
				echo('<td>' . $row['Preis'] . '</td>');
				echo('</tr>');
			}
			
			echo('</table>');
			echo('<br>');
			
			echo('<p>Befuellungen</p>');
			$db_res = mysqli_query($db_link, "SELECT * FROM `befuellung`") or die("Fehler: " . mysqli_error($db_link));
			
			echo('<table id = "bericht_tabellen">');
			echo('<tr>');
			echo('<th>PersNr</th>');
			echo('<th>StandortNr</th>');
			echo('<th>ArtikelNr</th>');
			echo('<th>Anzahl</th>');
			echo('<th>Datum</th>');
			echo('</tr>');
			
			while($row = mysqli_fetch_array($db_res))
			{
				echo('<tr>');
				echo('<td>' . $row['PersNr'] . '</td>');
				echo('<td>' . $row['StandortNr'] . '</td>');
				echo('<td>' . $row['ArtikelNr'] . '</td>');
				echo('<td>' . $row['Anzahl'] . '</td>');
				echo('<td>' . $row['Datum'] . '</td>');
				echo('</tr>');
			}
			
			echo('</table>');
			echo('<br>');
			
			echo('<p>Inventar</p>');
			$db_res = mysqli_query($db_link, "SELECT * FROM `inventar`") or die("Fehler: " . mysqli_error($db_link));
			
			echo('<table id = "bericht_tabellen">');
			echo('<tr>');
			echo('<th>InventarNr</th>');
			echo('<th>StandortNr</th>');
			echo('<th>ArtikelNr</th>');
			echo('<th>StueckzahlIST</th>');
			echo('<th>StueckzahlSOLL</th>');
			echo('<th>StueckzahlMAX</th>');
			echo('<th>Fehlbestand</th>');
			echo('</tr>');
			
			while($row = mysqli_fetch_array($db_res))
			{
				echo('<tr>');
				echo('<td>' . $row['InventarNr'] . '</td>');
				echo('<td>' . $row['StandortNr'] . '</td>');
				echo('<td>' . $row['ArtikelNr'] . '</td>');
				echo('<td>' . $row['StueckzahlIST'] . '</td>');
				echo('<td>' . $row['StueckzahlSOLL'] . '</td>');
				echo('<td>' . $row['StueckzahlMAX'] . '</td>');
				echo('<td>' . $row['Fehlbestand'] . '</td>');
				echo('</tr>');
			}
			
			echo('</table>');
			echo('<br>');
			
			echo('<p>Personen</p>');
			$db_res = mysqli_query($db_link, "SELECT * FROM `person`") or die("Fehler: " . mysqli_error($db_link));
			
			echo('<table id = "bericht_tabellen">');
			echo('<tr>');
			echo('<th>PersNr</th>');
			echo('<th>Name</th>');
			echo('<th>Vorname</th>');
			echo('<th>Benutzername</th>');
			echo('<th>Passwort</th>');
			echo('<th>Position</th>');
			echo('</tr>');
			
			while($row = mysqli_fetch_array($db_res))
			{
				echo('<tr>');
				echo('<td>' . $row['PersNr'] . '</td>');
				echo('<td>' . $row['Name'] . '</td>');
				echo('<td>' . $row['Vorname'] . '</td>');
				echo('<td>' . $row['Benutzername'] . '</td>');
				echo('<td>' . $row['Passwort'] . '</td>');
				echo('<td>' . $row['Position'] . '</td>');
				echo('</tr>');
			}
			
			echo('</table>');
			echo('<br>');
			
			echo('<p>Standorte</p>');
			$db_res = mysqli_query($db_link, "SELECT * FROM `standort`") or die("Fehler: " . mysqli_error($db_link));
			
			echo('<table id = "bericht_tabellen">');
			echo('<tr>');
			echo('<th>StandortNr</th>');
			echo('<th>Ort</th>');
			echo('<th>Plz</th>');
			echo('<th>Strasse</th>');
			echo('<th>Typ</th>');
			echo('<th>Beschreibung</th>');
			echo('</tr>');
			
			while($row = mysqli_fetch_array($db_res))
			{
				echo('<tr>');
				echo('<td>' . $row['StandortNr'] . '</td>');
				echo('<td>' . $row['Ort'] . '</td>');
				echo('<td>' . $row['Plz'] . '</td>');
				echo('<td>' . $row['Strasse'] . '</td>');
				echo('<td>' . $row['Typ'] . '</td>');
				echo('<td>' . $row['Beschreibung'] . '</td>');
				echo('</tr>');
			}
			
			echo('</table>');
			echo('<br>');
			
			echo('<p>Verkauefe</p>');
			$db_res = mysqli_query($db_link, "SELECT * FROM `verkauf`") or die("Fehler: " . mysqli_error($db_link));
			
			echo('<table id = "bericht_tabellen">');
			echo('<tr>');
			echo('<th>StandortNr</th>');
			echo('<th>PersNr</th>');
			echo('<th>ArtikelNr</th>');
			echo('<th>Anzahl</th>');
			echo('<th>Datum</th>');
			echo('</tr>');
			
			while($row = mysqli_fetch_array($db_res))
			{
				echo('<tr>');
				echo('<td>' . $row['StandortNr'] . '</td>');
				echo('<td>' . $row['PersNr'] . '</td>');
				echo('<td>' . $row['ArtikelNr'] . '</td>');
				echo('<td>' . $row['Anzahl'] . '</td>');
				echo('<td>' . $row['Datum'] . '</td>');
				echo('</tr>');
			}
			
			echo('</table>');
			echo('<br>');
		?>
		
	</fieldset>
</main>
<?php require("templates/footer.php"); ?>