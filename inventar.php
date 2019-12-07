<?php

require("php/loginSystem.php");
require("php/header.php");

if(!istEingeloggt())
{
	echo('<main>');
	echo('<p>Du musst dich zuvor einloggen. Weiterleiten...</p>');
	header("Refresh: 3; URL=http://localhost/login.php");
	echo('</main>');
	require("php/footer.php");
	die();
}

if(istEingeloggt() && ($_SESSION['position'] == "Verkaeufer"))
{
	echo('<main>');
	echo('<p>Zugang untersagt. Nur für Lieferanten und Geschäftsführer.</p>');
	header("Refresh: 3; URL=http://localhost/index.php");
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
	</ul>
</nav>

<main>
	<fieldset>
	<legend>Inventar verwalten</legend>
		
		<p>Liste ausgeben</p>
		<?php
			$db_res = mysqli_query($db_link, "SELECT * FROM `inventar`") or die("Fehler: " . mysqli_error($db_link));
			
			echo('<table id="inventar_tabelle">');
			echo('<tr>');
			echo('<th>Standort</th>');
			echo('<th>Artikel</th>');
			echo('<th>Stückzahl</th>');
			echo('</tr>');
			
			while($row = mysqli_fetch_array($db_res))
			{
				echo('<tr>');
				echo('<td>' . $row['StandortNr'] . '</td>');
				echo('<td>' . $row['ArtikelNr'] . '</td>');
				echo('<td>' . $row['StueckzahlIST'] . '</td>');
				echo('</tr>');
			}
			
			echo('</table>');
		?>
		
		<p>Lieferung erfassen</p>
		<fieldset id="fieldset_inventar">
			<form action="php/lieferungREST.php" method="POST">
			<input type="hidden" name="action" value="POST">

			<label>Artikel</label>
			<?php require("php/artikelnummer.php"); ?>
			
			<label>Stückzahl</label>
			<input type="number" id="Anzahl" name="Anzahl" placeholder="0">
				
			<label>Stückpreis [in €]</label>
			<input type="number" id="Preis" name="Preis" disabled readonly>
			
			<label>Gesamtpreis [in €]</label>
			<input type="number" id="Gesamtpreis" name="Gesamtpreis" disabled readonly>
			
			<input type="submit" name="sale" value="Lieferung erfassen">
			
			<script type="text/javascript" src="js/sales.js"></script>
			
			</form>
		</fieldset>
		
	</fieldset>
</main>
<?php require("php/footer.php"); ?>