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
	
		<p>Preisliste erstellen<p>
		<form class="form-inline" method="POST" action="Export/preisliste.bat">
		<button type="submit" id="preisliste" class="btn btn-primary">Erstellen</button>
		
		<p>Preisliste öffnen<p>
		Download
		
		<p>Katalog erstellen<p>
		<form class="form-inline" method="POST" action="Export/katalog.bat">
		<button type="submit" id="preisliste" class="btn btn-primary">Erstellen</button>
		
		<p>Katalog öffnen<p>
		Download
		
	</fieldset>
</main>
<?php require("php/footer.php"); ?>