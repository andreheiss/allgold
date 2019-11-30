<?php
	session_start();
	require("php/header.php");
	
	echo('<main>');
	if(isset($_SESSION['eingeloggt']) && $_SESSION['eingeloggt'] == 1)
	{
		$_SESSION['eingeloggt'] = 0;
		echo('<p>Du hast dich erfolgreich ausgeloggt.</p>');
		echo('<p><a href="/index.php">Zurück zur Startseite</a></p>');
	}
	else
	{
		echo('<p>Du musst dich zuvor einloggen.</p>');
		echo('<p><a href="/index.php">Zurück zur Startseite</a></p>');
	}
	echo('</main>');
	require("php/footer.php");
?>