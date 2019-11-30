<?php require("datenbank.php");

class sales
{
	public function addSale($data)
	{
   	   $stmt = "INSERT INTO verkaeufe ( 
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

   	   $db_res = mysqli_query($db_link,$stmt);

   	   if($db_res == 1)
   	   {
   	   	 return "Verkauf erfolgreich erfasst.";
   	   }

   	   return "DB-Statement: " .$stmt. "<br /> ergab folgendes Resultat:" .$db_res;
   }
}

?>