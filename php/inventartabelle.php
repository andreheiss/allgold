<?php

	$db_res = mysqli_query($db_link, "SELECT *, (StueckzahlSOLL-StueckzahlIST) AS fa, standort.Beschreibung as sb FROM `inventar`, `standort`, `artikel`  
	WHERE ((StueckzahlSOLL-StueckzahlIST) > 0) 
	AND inventar.ArtikelNr = artikel.ArtikelNr
	AND inventar.StandortNr = standort.StandortNr") or die("Fehler: " . mysqli_error($db_link));
	
	echo('<table id="inventar_tabelle">');
	echo('<tr>');
	echo('<th>Standort</th>');
	echo('<th>Artikel</th>');
	echo('<th>Anzahl aufzufüllen</th>');
	echo('</tr>');
	
	while($row = mysqli_fetch_array($db_res))
	{
		echo('<tr>');
		echo('<td>' . $row['Ort']. " (".$row['sb']. ")". '</td>');
		echo('<td>' . $row['Name']. " (".$row['Beschreibung']. ")". '</td>');
		echo('<td>' . $row['fa'] . '</td>');
		echo('</tr>');
	}
	
	echo('</table>');
	
?>