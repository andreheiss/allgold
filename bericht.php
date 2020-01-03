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

if(istEingeloggt() && ($_SESSION['position'] != "Geschaeftsfuehrung"))
{
	echo('<main>');
	echo('<p>Zugang untersagt. Nur für Geschäftsführer.</p>');
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
		<li><a class="active" href="bericht.php">Berichtswesen (Reporting)</a></li>
		<li><a href="liste.php">Preislisten- und Katalogerstellung</a></li>
		<li style="float:right"><a href="logout.php">Ausloggen</a></li>
	</ul>
</nav>

<main>
	<fieldset>
	<legend>Bericht anzeigen</legend>
	
		<object width="100%" height="1600" data="http://localhost:8080/Allgold/faces/cockpit/cockpit.xhtml"></object>
		
	</fieldset>
</main>
<?php require("php/footer.php"); ?>