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
	
		<fieldset id="fieldset_inventar">
			<form action="php/lieferungREST.php" method="POST">
			<input type="hidden" name="action" value="POST">
			
			<?php require("php/standort.php"); ?>
			
			<input type="submit" name="refill" value="Standort auffüllen">
			
			</form>
		</fieldset>
		
		<?php require("php/inventartabelle.php"); ?>
		
	</fieldset>
</main>
<?php require("php/footer.php"); ?>