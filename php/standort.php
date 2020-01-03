<?php

	$db_res = runSQL("SELECT * FROM `standort`, `inventar` WHERE (StueckzahlIST < StueckzahlSOLL) AND standort.StandortNr = inventar.StandortNr GROUP BY standort.StandortNr");
	echo("<select id='StandortNr' name='StandortNr'>");
	echo("<option>Bitte wählen ...</option>");
	while($row = mysqli_fetch_array($db_res))
	{
		echo("<option value='" . $row['StandortNr'] . "'>" .$row['Ort']. " (".$row['Beschreibung']. ")"."</option>");
	}
	echo("</select>");
				
?>