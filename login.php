<?php

require("php/loginSystem.php");
require("php/header.php");
	
if(istEingeloggt())
{
	echo('<main>');
	echo('<p>Du bist bereits eingeloggt. Weiterleiten...</p>');
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
		<li><a href="liste.php">Preislisten- und Katalogerstellung</a></li>
		<li style="float:right"><a class="active" href="login.php">Einloggen</a></li>
	</ul>
</nav>

<main>
	<fieldset>
	<legend>Einloggen</legend>
	
		<p>Bitte loggen Sie sich ein! <a href="registrieren.php">Neu registrieren...</a></p>
		<fieldset id="fieldset_login">
			<form action="php/loginsystemREST.php" method="POST">
			<input type="hidden" name="action" value="POST">
			
			<label>Benutzername:</label>
			<input type="text" name="Benutzername"/>
			<br>

			<label>Passwort:</label>
			<input type="password" name="Passwort"/>
			<br><br>
			
			<div id="buttons">	
			<input type="submit" name="login" value="Login"/>
			</div>
			
			</form>
		</fieldset>
	</fieldset>
</main>
<?php require("php/footer.php"); ?>