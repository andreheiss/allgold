<?php
 
// include necessary classes 
include('products.php');


$products = new products();
$data = array_merge($_GET, $_POST);
$method = $data['action'];
$retlnk = '<br> <a href="index.html"> zur&uuml;ck zur Homeseite </a>';


 // create SQL based on HTTP method
switch ($method) 
{
  case 'GET':

    if(!empty($data['productID']))
    {
    	$sql = $products->getProduct($data['productID']);
        header('Content-type: application/json; charset=utf-8'); 
        echo json_encode($sql); 
        break;
    }

    /*if(!empty($data['location']))
    {
        $sql = $products->findByLocation($data['location']);
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($sql);
        break;
    }*/

    else
    {
    	$sql = $products->getAllProducts();
        header('Content-type: application/json; charset=utf-8'); 
        echo json_encode($sql);
        break;
    }

    break;

  case 'POST':
    $sql = $products->addProduct($data); 
    echo "Antwort: ".$sql.$retlnk;
    break;

  case 'PUT':
    $sql = $products->updateProduct($data);
    if($sql == "OK")
    {
    	$send = $products->getAllProducts();
        header('Content-type: application/json; charset=utf-8'); 
        echo json_encode($send);    	
    } 
    else
    {
    	echo $sql;
    }
    break;

  case 'DELETE':
    $sql = $products->removeProduct($data['productsID']); 
    echo $sql.$retlnk;
    break;
}



?>

