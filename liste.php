<?php
	session_start();
	require("php/header.php");
	
	if(isset($_SESSION['eingeloggt']) && $_SESSION['eingeloggt'] != 1 || $_SESSION['position'] == 2)
	{
		echo('<main>');
		echo('<p>Diese Seite ist nur für eingeloggte Mitarbeiter sichtbar.</p>');
		echo('<p><a href="/index.php">Zurück zur Startseite</a></p>');
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
		<li style="float:right"><a href="login.php">Einloggen</a></li>
	</ul>
</nav>

<main>
	<fieldset>
	<legend>Allgold Supply Center</legend>
	
		<br><br><br><br><br>
		<p><a>Willkommen im Allgold Supply Center.</a></p>
		<br><br><br><br><br>
		
	</fieldset>
</main>
<?php require("php/footer.php"); ?>