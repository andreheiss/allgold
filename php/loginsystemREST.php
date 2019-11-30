<?php
 
include('loginsystem.php');

$loginsystem = new loginsystem();
$data = array_merge($_GET, $_POST);
$method = $data['action'];
$home = '<br><br><a href="/index.php">Zurück zur Startseite</a>';

switch ($method)
{
	case 'GET':
	break;

	case 'POST':
		if(isset($_POST['register']))
		{
			if(empty($_POST['Benutzername']) || empty($_POST['Passwort']) || empty($_POST['Name']) || empty($_POST['Vorname']) || empty($_POST['Position']))
			{
				echo('<main>');
				echo('<p>Bitte alle Felder ausfüllen.</p>');
				echo "".$home;
				echo('</main>');
			}
			else
			{
				$sql = $loginsystem->register($data);
				echo "".$sql.$home;
			}
		}
		else if(isset($_POST['login']))
		{
			if(empty($_POST['Benutzername']) || empty($_POST['Passwort']))
			{
				echo('<main>');
				echo('<p>Bitte alle Felder ausfüllen.</p>');
				echo "".$home;
				echo('</main>');
			}
			else
			{
				$sql = $loginsystem->login($data);
				echo "".$sql.$home;
			}
		}
	break;

	case 'PUT':
	break;

	case 'DELETE':
	break;
}

?>