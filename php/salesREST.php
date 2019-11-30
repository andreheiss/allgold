<?php
 
include('sales.php');

$sales = new sales();
$data = array_merge($_GET, $_POST);
$method = $data['action'];
$home = '<br><br><a href="/index.php">Zurück zur Startseite</a>';

switch ($method)
{
	case 'GET':
	break;

	case 'POST':
		$sql = $sales->addSale($data);
		echo "".$sql.$home;
	break;

	case 'PUT':
	break;

	case 'DELETE':
	break;
}

?>