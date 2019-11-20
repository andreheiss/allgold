<?php
 
// include necessary classes 
include('sales.php');


$sales = new sales();
$data = array_merge($_GET, $_POST);
$method = $data['action'];
$retlnk = '<br> <a href="index.html"> zur&uuml;ck zur Homeseite </a>';


 // create SQL based on HTTP method
switch ($method) 
{
  case 'GET':

    if(!empty($data['saleID']))
    {
    	$sql = $sales->getSale($data['saleID']);
        header('Content-type: application/json; charset=utf-8'); 
        echo json_encode($sql); 
        break;
    }

    if(!empty($data['stationID']))
    {
        $sql = $sales->findBystationID($data['stationID']);
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($sql);
        break;
    }

    else
    {
    	$sql = $sales->getAllSales();
        header('Content-type: application/json; charset=utf-8'); 
        echo json_encode($sql);
        break;
    }

    break;

  case 'POST':
    $sql = $sales->addSale($data); 
    echo "Antwort: ".$sql.$retlnk;
    break;

  case 'PUT':
    $sql = $sales->updateSale($data);
    if($sql == "OK")
    {
    	$send = $sales->getAllSales();
        header('Content-type: application/json; charset=utf-8'); 
        echo json_encode($send);    	
    } 
    else
    {
    	echo $sql;
    }
    break;

  case 'DELETE':
    $sql = $sales->removeSale($data['salesID']); 
    echo $sql.$retlnk;
    break;
}
?>