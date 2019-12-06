<?php

include("php/loginSystem.php");
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
	echo('<p>Zugang untersagt. Nur für Verkäufer und Geschäftsführer. Weiterleiten...</p>');
	echo('<p><a href="/index.php">Zur Startseite</a></p>');
	echo('</main>');
	require("php/footer.php"); 
	die();
}

?>

<nav>
	<ul>
		<li><a href="index.php">Startseite</a></li>
		<li><a class="active"href="verkauf.php">Verkaufserfassung</a></li>
		<li><a href="inventar.php">Inventarverwaltung</a></li>
		<li><a href="bericht.php">Berichtswesen (Reporting)</a></li>
		<li><a href="liste.php">Preislisten- und Katalogerstellung</a></li>
		<li style="float:right"><a href="logout.php">Ausloggen</a></li>
	</ul>
</nav>

<main>
	<fieldset>
	<legend>Verkauf erfassen</legend>
	
		<fieldset id="fieldset_verkauf">
			<form action="php/salesREST.php" method="POST">
			<input type="hidden" name="action" value="POST">

			<label>Artikel</label>
			<?php require("php/artikelnummer.php"); ?>
			
			<label>Stückzahl</label>
			<input type="number" id="Anzahl" name="Anzahl" placeholder="0">
				
			<label>Stückpreis [in €]</label>
			<input type="text" id="Preis" name="Preis" disabled readonly>
			
			<label>Gesamtpreis [in €]</label>
			<input type="text" id="Gesamtpreis" name="Gesamtpreis" disabled readonly>
			
			<button type="submit" name="sale">Verkauf erfassen</button>
			
			<script type="text/javascript" src="js/sales.js"></script>
			
			</form>
		</fieldset>
	</fieldset>
</main>

<?php require("php/footer.php"); ?>