<?php
	require("php/loginSystem.php");
	require("php/header.php");
?>

<nav>
	<ul>
		<li><a class="active" href="index.php">Startseite</a></li>
		<li><a href="verkauf.php">Verkaufserfassung</a></li>
		<li><a href="inventar.php">Inventarverwaltung</a></li>
		<li><a href="bericht.php">Berichtswesen (Reporting)</a></li>
		<li><a href="liste.php">Preislisten- und Katalogerstellung</a></li>
		<?php
			if(istEingeloggt())
			{
				echo('<li style="float:right"><a href="logout.php">Ausloggen</a></li>');
			}
			else
			{
				echo('<li style="float:right"><a href="login.php">Einloggen</a></li>');
			}
		?>
	</ul>
</nav>

<main>
	<fieldset>
	<legend>Allgold Supply Center</legend>
	
		<br><br><br><br><br>
		<p>Willkommen im Allgold Supply Center.</p>
		<br><br><br><br><br>
		
	</fieldset>
</main>
<?php require("php/footer.php"); ?>