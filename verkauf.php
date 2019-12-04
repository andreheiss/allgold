<?php

require("php/loginSystem.php");
include("php/header.php");

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
		<li style="float:right"><a href="logout.php">Ausloggen</a></li>');
	</ul>
</nav>

<main>
	<fieldset>
	<legend>Verkauf erfassen</legend>
	
		<fieldset id="fieldset_verkauf">
			<form action="php/salesREST.php" method="POST">
			<input type="hidden" name="action" value="POST">

			<label>Artikel</label>
			<?php
				$db_res = runSQL("SELECT * FROM `artikel`");
				echo "<select name='ArtikelNr'>";
				while($row = mysqli_fetch_array($db_res))
				{
					echo("<option value='" . $row['ArtikelNr'] . "'>" .$row['Name']. " (".$row['Beschreibung']. ")"."</option>");
				}	
				echo "</select>";	
			?>
			
			<br>
			
			<label>Stückzahl</label>
			<input type="number" id="Anzahl" name="Anzahl" placeholder="0"/>
			
			<br>
				
			<label>Preis in €</label>
			<?php
				$db_res = runSQL("SELECT Preis FROM `artikel` WHERE ArtikelNr=1");
				while($row = mysqli_fetch_array($db_res))
				{
					echo("<input type='text' id='Preis' name='Preis' disabled='disabled' value='".$row['Preis']."' readonly>");
				}
			?>
			
			<br><br>
			
			<button type="button" name="Gesamtpreis" id="salebuttons">Gesamtpreis anzeigen</button>
			
			<output style="float:right"></output>
			<script type="text/javascript" src="js/sales.js"></script>
			
			<br><br>
			
			<button type="submit" name="sale" id="salebuttons">Verkauf erfassen</button>
			
			<br>
			
			</form>
		</fieldset>
	</fieldset>
</main>

<?php require("php/footer.php"); ?>