<?php

include('loginSystem.php');

function refill($data)
{
	$vk = "INSERT INTO `verkauf` (
	StandortNr,
	PersNr,
	ArtikelNr,
	Anzahl
	) VALUES (
	'".$_SESSION['standort']."',
	'".$_SESSION['person']."',
	'".$data['ArtikelNr']."',
	'".$data['Anzahl']."');";
	
	$inv = "UPDATE `inventar`
	SET StueckzahlIST = (StueckzahlIST - ".$data['Anzahl'].")
	WHERE ArtikelNr = ".$data['ArtikelNr']."
	AND StandortNr = ".$_SESSION['standort'].";";

	$res_inv = runSQL($inv);
	if(!$res_inv)
	{
		return "FEHLER | " .$res_inv;
	}
	
	$res_vk = runSQL($vk);
	if(!$res_vk)
	{
		return "FEHLER | " .$res_vk;
	}
	
	return "Lieferung erfolgreich erfasst. Weiterleiten...";
}

?>