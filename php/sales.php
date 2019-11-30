<?php

include('datenbank.php');

class sales
{	
	public function addSale($data)
	{
		$stmt = "INSERT INTO `verkauf` (
		StandortNr,
		PersNr,
		ArtikelNr,
		Anzahl,
		Datum
	    ) VALUES (
	    '".$data['StandortNr']."',
	    '".$data['PersNr']."',
	    '".$data['ArtikelNr']."',
	    '".$data['Anzahl']."',
	    '".$data['Datum']."'
	    );";

   	    $result = runSQL($stmt);

   	    if($result == 1)
   	    {
			return "Verkauf erfolgreich erfasst.";
   	    }
   	    return "FEHLER | ".$result;
   }
}

?>