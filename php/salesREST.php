<?php
 
include('sales.php');

$sales = new sales();
$data = array_merge($_GET, $_POST);
$method = $data['action'];
$retlnk = '<br><a href="index.php"> zur&uuml;ck zur Startseite</a>';

switch ($method) 
{
  case 'GET':
    break;

  case 'POST':
    $sql = $sales->addSale($data);
    echo "Antwort: ".$sql.$retlnk;
    break;

  case 'PUT':
    break;

  case 'DELETE':
    break;
}

?>