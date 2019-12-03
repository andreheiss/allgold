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

if(istEingeloggt() && ($_SESSION['position'] != 1))
{
	echo('<main>');
	echo('<p>Zugang untersagt. Nur für Geschäftsführer.</p>');
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
		<li><a href="inventar.php">Inventarverwaltung</a></li>
		<li><a href="bericht.php">Berichtswesen (Reporting)</a></li>
		<li><a class="active" href="liste.php">Preislisten- und Katalogerstellung</a></li>
		<li style="float:right"><a href="logout.php">Ausloggen</a></li>
	</ul>
</nav>

<main>
	<fieldset>
	<legend>Allgold Supply Center</legend>
	
		<br><br><br><br><br>
		<p><a>Preislisten- und Katalogerstellung</a></p>
		<br><br><br><br><br>
		
	</fieldset>
</main>
<?php require("php/footer.php"); ?>