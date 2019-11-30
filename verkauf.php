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
		<li><a class="active"href="verkauf.php">Verkaufserfassung</a></li>
		<li><a href="inventar.php">Inventarverwaltung</a></li>
		<li><a href="bericht.php">Berichtswesen (Reporting)</a></li>
		<li><a href="liste.php">Preislisten- und Katalogerstellung</a></li>
		<li style="float:right"><a href="logout.php">Ausloggen</a></li>
		<li style="float:right"><a href="login.php">Einloggen</a></li>
	</ul>
</nav>

<main>
	<fieldset>
	<legend>Verkauf erfassen</legend>
	
		<fieldset id="fieldset_verkauf">
			<form action="php/salesREST.php" method="POST">
			<input type="hidden" name="action" value="POST">
			
			<label>Standort:</label>
			<select name="StandortNr">
				<option value="1">Kempten Firmensitz (B)</option>
				<option value="2">Kempten Außenstelle (V)</option>
				<option value="3">Kaufbeuren Außenstelle (V)</option>
				<option value="4">Memmingen Außenstelle (B)</option>
				<option value="5">Isny Außenstelle (A)</option>
				<option value="6">Marktoberdorf Außenstelle (A)</option>
				<option value="7">Sonthofen Außenstelle (V)</option>
				<option value="8">Oberstdorf Außenstelle (A)</option>
				<option value="9">Oberstaufen Außenstelle (A)</option>
				<option value="10">Immenstadt Außenstelle (A)</option>
				<option value="11">Füssen Außenstelle (B)</option>
				<option value="12">Lindau Außenstelle (B)</option>
			</select>
			<br>
			
			<label>Person:</label>
			<select name="PersNr">
				<option value="1">Geschäftsführung</option>
				<option value="2">Lieferant</option>
				<option value="3">Verkäufer</option>
			</select>
			<br>

			<label>Artikel:</label>
			<select name="ArtikelNr">
				<option value="1">Milch</option>
				<option value="2">Emmentaler</option>
				<option value="3">Gauda</option>
				<option value="4">Joghurt 100g</option>
				<option value="5">Quark</option>
				<option value="6">Joghurt 500g</option>
				<option value="7">Streichkäse</option>
				<option value="8">Bergkäse</option>
			</select>
			<br>
			
			<label>Anzahl:</label>
			<input type="text" name="Anzahl" placeholder="0"/>
			<br>
			
			<label>Datum:</label>
			<input type="text" name="Datum" placeholder="2000-01-20"/>
			<br><br>
			
			<div id="buttons">
			<input type="submit" name="sale" value="Verkauf erfassen"/>
			</div>
			
			</form>
		</fieldset>
	</fieldset>
</main>
<?php require("php/footer.php"); ?>