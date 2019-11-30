<?php
	$db_link = mysqli_connect('localhost', 'root', '', 'datenbank');
	
	if(!$db_link)
	{
		die("<p>Fehler beim Verbinden mit der Datenbank!</p>");
	}
?>