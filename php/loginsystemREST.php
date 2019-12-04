<?php

include('loginSystem.php');

$data = array_merge($_GET, $_POST);
$method = $data['action'];

switch ($method)
{
	case 'GET':
	break;

	case 'POST':
		if(isset($_POST['register']))
		{
			if(empty($_POST['Benutzername']) || empty($_POST['Passwort']) || empty($_POST['Name']) || empty($_POST['Vorname']) || empty($_POST['Position']) || empty($_POST['StandortNr']))
			{
				echo('<main>');
				echo('<p>Bitte alle Felder ausfüllen. Weiterleiten...</p>');
				header("Refresh: 3; URL=http://localhost/registrieren.php");
				echo('</main>');
			}
			else
			{
				$sql = register($data);
				echo("" .$sql);
				header("Refresh: 3; URL=http://localhost/login.php");
			}
		}
		else if(isset($_POST['login']))
		{
			if(empty($_POST['Benutzername']) || empty($_POST['Passwort']))
			{
				echo('<main>');
				echo('<p>Bitte alle Felder ausfüllen. Weiterleiten...</p>');
				header("Refresh: 3; URL=http://localhost/login.php");
				echo('</main>');
			}
			else
			{
				$sql = login($data);
				echo("" .$sql);
				header("Refresh: 3; URL=http://localhost/index.php");
			}
		}
	break;

	case 'PUT':
	break;

	case 'DELETE':
	break;
}

?>