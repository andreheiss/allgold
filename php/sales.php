<?php

include('datenbank.php');

function addSale($data)
{
	$stmt = "INSERT INTO `verkauf` (
	StandortNr,
	PersNr,
	ArtikelNr,
	Anzahl
	) VALUES (
	'".$data['StandortNr']."',
	'".$data['PersNr']."',
	'".$data['ArtikelNr']."',
	'".$data['Anzahl']."'
	);";

	$result = runSQL($stmt);

	if($result == 1)
	{
		return "Verkauf erfolgreich erfasst.";
	}
	return "FEHLER | ".$result;
}

?>