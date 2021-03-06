<?php

session_start();
include('datenbank.php');

function istEingeloggt()
{
	if(isset($_SESSION['eingeloggt']) && $_SESSION['eingeloggt'] == 1)
	{
		return true;
	}
	return false;
}

function register($data)
{
	global $db_link;
	$benutzer = mysqli_real_escape_string($db_link, $data['Benutzername']);
	$name = mysqli_real_escape_string($db_link, $data['Name']);
	$vorname = mysqli_real_escape_string($db_link, $data['Vorname']);
	$position = mysqli_real_escape_string($db_link, $data['Position']);
	$standort = mysqli_real_escape_string($db_link, $data['StandortNr']);
	$passwort = md5($data['Passwort']);
	
	$db_res = runSQL("SELECT COUNT(*) FROM `person` WHERE Benutzername='" . $benutzer . "'");
	$row = mysqli_fetch_array($db_res);
	
	if($row['COUNT(*)'] > 0)
	{
		return 'Der eingegebene Benutzername ist schon vergeben. Weiterleiten...';
	}
	
	$stmt = "INSERT INTO `person` (
	Name,
	Vorname,
	Benutzername,
	Passwort,
	Position,
	StandortNr
	) VALUES (
	'".$name."',
	'".$vorname."',
	'".$benutzer."',
	'".$passwort."',
	'".$position."',
	'".$standort."'
	);";
	
	$result = runSQL($stmt);

	if($result == 1)
	{
		return "Benutzer erfolgreich registriert. Weiterleiten...";
	}
	return "FEHLER | ".$result;
}

function login($data)
{
	global $db_link;
	$benutzer = mysqli_real_escape_string($db_link, $data['Benutzername']);
	$passwort = md5($data['Passwort']);
	
	$db_res = runSQL("SELECT * FROM `person` WHERE Benutzername='" . $benutzer . "' AND Passwort='" .$passwort . "'");
	
	if(mysqli_num_rows($db_res) == 0)
	{
		return 'Benutzername oder Passwort falsch. Weiterleiten...';
	}
	
	$row = mysqli_fetch_array($db_res);
	$_SESSION['eingeloggt'] = 1;
	$_SESSION['person'] = $row['PersNr'];
	$_SESSION['position'] = $row['Position'];
	$_SESSION['standort'] = $row['StandortNr'];
	
	return 'Erfolgreich eingeloggt. Weiterleiten...';
}

?>