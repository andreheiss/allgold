<?php

class sales
{
   private $db;

   public function __construct()
   {
      $this->db = new mysqli("127.0.0.1","root");

      if (mysqli_connect_errno())
      {
      	die("error while connection to database!:".mysqli_connect_error());
      }

      $this->db->select_db("grp115_IKS");

      if($this->db->errno)
      {
      	die ($this->db->error);
      }
   }


   // C reate

   public function addSale($data)
   {
   	   //create insert string
   	   $stmt = "INSERT INTO sales ( 
   	   saleID,
   	   productID,
       location,
   	   quantity
   	   ) VALUES (
   	   '".$data['saleID']."',
   	   '".$data['productID']."',
       '".$data['location']."',
   	   '".$data['quantity']."'
   	   );";

       //commit db request
   	   $result = $this->db->query($stmt);

   	   if($result == 1)
   	   {
   	   	 return "sale succesfully inserted.";
   	   }

   	   return "your statment: ".$stmt."<br /> received result:".$result;
   }


  // R ead 

   public function getallSales()
   {
      $allSales = array();
      $stmt = "SELECT * FROM sales;";
      $result = $this->db->query($stmt);

        if(empty($result))
        {
           return "your statement: ".$stmt."<br /> received result:".$result;
        }

      while ($row = $result->fetch_assoc()) 
      {
        $allSales[] = $row;
      }

      return  $allSales;
   }

   public function getSale($saleID)
   {
   	  $allSales = array();
   	  $stmt = "SELECT * FROM sales WHERE saleID = ".$saleID.";";
   	  $result = $this->db->query($stmt);

        if(empty($result))
        {
           return "your statement: ".$stmt."<br /> received result:".$result;
        }

      while ($row = $result->fetch_assoc()) 
      {
        $allSales[] = $row;
      }

      return $allSales;
   	  //return $row = $result->fetch_assoc(); 
   }


   public function findByLocation($location)
   {
   	  $allSales = array();
   	  $stmt = "SELECT * FROM sales WHERE location = '".$location."';";
      $result = $this->db->query($stmt);

        if(empty($result))
        {
           return "your statement: ".$stmt."<br /> received result:".$result;
        }

      while ($row = $result->fetch_assoc()) 
      {
        $allSales[] = $row;
      }

      return $allSales;
   }


// U pdate
    
  public function updateSale($data)
  {
    //create insert string
    $stmt = "UPDATE station SET saleID = '".$data['saleID']."',
                                name = '".$data['name']."',
                                   location = '".$data['location']."',
                            quantity =  '".$data['quantity']."'
                            WHERE saleID = ".$data['saleID']." ;";

    //commit db request
    $result = $this->db->query($stmt);

    if($result == 1)
    {
      return "OK";
    }

    return "your statement: ".$stmt."<br /> received result:".$result;
  }


// D elete

   public function removeSale($saleID)
   {
      $allSales = array();
      $stmt = "DELETE FROM sales WHERE saleID = ".$saleID.";";
      $result = $this->db->query($stmt);

       if($result == 1)
       {
         return "sale succesfully deleted.";
       }

       return "your statment: ".$stmt."<br /> received result:".$result;
   }
}