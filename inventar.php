<?php

require("php/loginSystem.php");
require("php/header.php");

if(!istEingeloggt())
{
	echo('<main>');
	echo('<p>Du musst dich zuvor einloggen.</p>');
	echo('<p><a href="/login.php">Zum Login</a></p>');
	echo('<p><a href="/index.php">Zur Startseite</a></p>');
	echo('</main>');
	require("php/footer.php");
	die();
}

if(istEingeloggt() && ($_SESSION['position'] > 2))
{
	echo('<main>');
	echo('<p>Zugang untersagt. Nur für Lieferanten und Geschäftsführer.</p>');
	echo('<p><a href="/index.php">Zur Startseite</a></p>');
	echo('</main>');
	require("php/footer.php");
	die();
}

?>

<nav>
	<ul>
		<li><a href="index.php">Startseite</a></li>
		<li><a href="verkauf.php">Verkaufserfassung</a></li>
		<li><a class="active" href="inventar.php">Inventarverwaltung</a></li>
		<li><a href="bericht.php">Berichtswesen (Reporting)</a></li>
		<li><a href="liste.php">Preislisten- und Katalogerstellung</a></li>
		<li style="float:right"><a href="logout.php">Ausloggen</a></li>
		<li style="float:right"><a href="login.php">Einloggen</a></li>
	</ul>
</nav>

<main>
	<fieldset>
	<legend>Inventar verwalten</legend>
		
		<?php
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
<?php require("php/footer.php"); ?>