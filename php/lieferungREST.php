<?php

include('lieferung.php');

$data = array_merge($_GET, $_POST);
$method = $data['action'];

switch ($method)
{
	case 'GET':
	break;

	case 'POST':
		$sql = refill($data);
		echo("" .$sql);
		header("Refresh: 3; URL=http://localhost/inventar.php");
	break;

	case 'PUT':
	break;

	case 'DELETE':
	break;
}

?>