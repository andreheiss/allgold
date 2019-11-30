<?php

include('sales.php');

$data = array_merge($_GET, $_POST);
$method = $data['action'];
$home = '<br><br><a href="/index.php">Zurück zur Startseite</a>';

switch ($method)
{
	case 'GET':
	break;

	case 'POST':
		$sql = addSale($data);
		echo "".$sql.$home;
	break;

	case 'PUT':
	break;

	case 'DELETE':
	break;
}

?>