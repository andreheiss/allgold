<?php require("templates/header.php"); ?>

<nav>
	<ul>
		<li><a href="index.php">Startseite</a></li>
		<li><a href="verkauf.php">Verkaufserfassung</a></li>
		<li><a class="active" href="inventar.php">Inventarverwaltung</a></li>
		<li><a href="bericht.php">Berichtswesen (Reporting)</a></li>
		<li><a href="liste.php">Preislisten- und Katalogerstellung</a></li>
		<li style="float:right"><a href="login.php">Einloggen</a></li>
	</ul>
</nav>

<main>
	<fieldset>
	<legend>Inventar verwalten</legend>
		
		<?php require("php/datenbank.php");
			$db_res = mysqli_query($db_link, "SELECT * FROM `inventar`") or die("Fehler: " . mysqli_error($db_link));
			
			echo('<table id="inventar_tabelle">');
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
		?>
		
	</fieldset>
</main>
<?php require("templates/footer.php"); ?>