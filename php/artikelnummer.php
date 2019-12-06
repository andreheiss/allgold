<?php

$db_res = runSQL("SELECT * FROM `artikel`");
echo("<select id='ArtikelNr' name='ArtikelNr'>");
echo("<option>Bitte wählen ...</option>");
while($row = mysqli_fetch_array($db_res))
{
	echo("<option value='" . $row['ArtikelNr'] . "'>" .$row['Name']. " (".$row['Beschreibung']. ")"."</option>");
}
echo("</select>");
	
?>