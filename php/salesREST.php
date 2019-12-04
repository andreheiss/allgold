<?php

include('sales.php');

$data = array_merge($_GET, $_POST);
$method = $data['action'];

switch ($method)
{
	case 'GET':
	break;

	case 'POST':
		$sql = addSale($data);
		echo("" .$sql);
		header("Refresh: 3; URL=http://localhost/verkauf.php");
	break;

	case 'PUT':
	break;

	case 'DELETE':
	break;
}

?>