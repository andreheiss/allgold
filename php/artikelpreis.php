<?php
	
include("datenbank.php");
	
$db_res = runSQL("SELECT Preis FROM `artikel` WHERE ArtikelNr='" . $_GET['id'] . "'");
$row = mysqli_fetch_array($db_res);
echo($row['Preis']);

?>