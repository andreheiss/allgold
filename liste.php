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

if(istEingeloggt() && ($_SESSION['position'] == "Lieferant"))
{
	echo('<main>');
	echo('<p>Zugang untersagt. Nur für Geschäftsführer und Verkäufer.</p>');
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
		<li><a href="inventar.php">Inventarverwaltung</a></li>
		<li><a href="bericht.php">Berichtswesen (Reporting)</a></li>
		<li><a class="active" href="liste.php">Preislisten- und Katalogerstellung</a></li>
		<li style="float:right"><a href="logout.php">Ausloggen</a></li>
	</ul>
</nav>

<main>
	<fieldset>
	<legend>Liste drucken</legend>
	
		<fieldset id="fieldset_liste">
		<legend>Preisliste</legend>
			<form class="form-inline" method="POST" action="php/preisliste.php" target="_blank">
				<input type="submit" class="btn btn-primary" value="Aktualisieren und Anzeigen">
			</form>
		</fieldset>
		
		<br><br>
		
		<fieldset id="fieldset_liste">
		<legend>Katalog</legend>
			<form class="form-inline" method="POST" action="php/katalog.php" target="_blank">
				<input type="submit" class="btn btn-primary" value="Aktualisieren und Anzeigen">
			</form>
		</fieldset>
		
		<br>
		
	</fieldset>
</main>
<?php require("php/footer.php"); ?>