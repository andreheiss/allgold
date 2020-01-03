<?php

include('loginSystem.php');

function refill($data)
{	
	$db_res = runSQL("UPDATE `inventar` SET StueckzahlIST = StueckzahlSOLL WHERE (StueckzahlIST < StueckzahlSOLL) AND StandortNr =".$data['StandortNr']."");

	if(!$db_res)
	{
		return "FEHLER | " .$db_res;
	}
	
	return "Standort erfolgreich befüllt. Weiterleiten...";
}

?>