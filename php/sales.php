<?php

include('loginSystem.php');

function addSale($data)
{
	$stmt = "INSERT INTO `verkauf` (
	StandortNr,
	PersNr,
	ArtikelNr,
	Anzahl
	) VALUES (
	'".$_SESSION['standort']."',
	'".$_SESSION['person']."',
	'".$data['ArtikelNr']."',
	'".$data['Anzahl']."'
	);";

	$result = runSQL($stmt);

	if(!$result)
	{
		return "FEHLER | ".$result;
	}
	return "Verkauf erfolgreich erfasst. Weiterleiten...";
}

?>