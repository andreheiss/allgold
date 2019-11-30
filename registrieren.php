<?php
	session_start();
	require("php/header.php");
	
	if(isset($_SESSION['eingeloggt']) && $_SESSION['eingeloggt'] == 1)
	{
		echo('<main>');
		echo('<p>Du bist bereits eingeloggt.</p>');
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
		<li><a href="liste.php">Preislisten- und Katalogerstellung</a></li>
		<li style="float:right"><a class="active" href="login.php">Einloggen</a></li>
	</ul>
</nav>

<main>
	<fieldset>
	<legend>Registrieren</legend>
	
		<p>Bitte registrieren Sie sich! <a href="login.php">Einloggen...</a></p>
		<fieldset id="fieldset_registrieren">
			<form action="php/loginsystemREST.php" method="POST">
			<input type="hidden" name="action" value="POST">
			
			<label>Benutzername:</label>
			<input type="text" name="Benutzername"/>
			<br>
			
			<label>Passwort:</label>
			<input type="password" name="Passwort"/>
			<br>
			
			<label>Name:</label>
			<input type="text" name="Name"/>
			<br>
			
			<label>Vorname:</label>
			<input type="text" name="Vorname"/>
			<br>
			
			<label>Position:</label>
			<select name="Position">
				<option value="1">Geschäftsführung</option>
				<option value="2">Lieferant</option>
				<option value="3">Verkäufer</option>
			</select>
			<br><br>
			
			<div id="buttons">
			<input type="submit" name="register" value="Registrieren"/>
			</div>
				
			</form>
		</fieldset>
		
	</fieldset>
</main>
<?php require("php/footer.php"); ?>