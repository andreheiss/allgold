<?php
	$db_link = mysqli_connect('localhost','root','','datenbank');
	
	if(!$db_link)
	{
		die("<p>Fehler beim Verbinden mit der Datenbank!</p>");
	}
	
	function runSQL($statement)
	{
		global $db_link;
		$db_res = mysqli_query($db_link, $statement) or die("SQL: " . $statement . ", Fehler: " . mysqli_error($db_link));
		return $db_res;
	}
?>