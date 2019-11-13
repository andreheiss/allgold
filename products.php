<?php

class products
{
   private $db;

   public function __construct()
   {
      $this->db = new mysqli("127.0.0.1","grp115","ITTgrp115");

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

   public function addProduct($data)
   {
   	   //create insert string
   	   $stmt = "INSERT INTO products ( 
   	   productID,
   	   name,
       price,
   	   durability
   	   ) VALUES (
   	   '".$data['productID']."',
   	   '".$data['name']."',
       '".$data['price']."',
   	   '".$data['durability']."'
   	   );";

       //commit db request
   	   $result = $this->db->query($stmt);

   	   if($result == 1)
   	   {
   	   	 return "product succesfully inserted.";
   	   }

   	   return "your statment: ".$stmt."<br /> received result:".$result;
   }


  // R ead 

   public function getAllProducts()
   {
      $allProducts = array();
      $stmt = "SELECT * FROM products;";
      $result = $this->db->query($stmt);

        if(empty($result))
        {
           return "your statement: ".$stmt."<br /> received result:".$result;
        }

      while ($row = $result->fetch_assoc()) 
      {
        $allProducts[] = $row;
      }

      return  $allProducts;
   }

   public function getProduct($productID)
   {
   	  $allProducts = array();
   	  $stmt = "SELECT * FROM products WHERE productID = ".$productID.";";
   	  $result = $this->db->query($stmt);

        if(empty($result))
        {
           return "your statement: ".$stmt."<br /> received result:".$result;
        }

      while ($row = $result->fetch_assoc()) 
      {
        $allProducts[] = $row;
      }

      return $allProducts;
   	  //return $row = $result->fetch_assoc(); 
   }


   /*public function findByLocation($location)
   {
   	  $allProducts = array();
   	  $stmt = "SELECT * FROM station WHERE location = '".$location."';";
      $result = $this->db->query($stmt);

        if(empty($result))
        {
           return "your statement: ".$stmt."<br /> received result:".$result;
        }

      while ($row = $result->fetch_assoc()) 
      {
        $allproducts[] = $row;
      }

      return $allproducts;
   }*/



// U pdate
    
  public function updateProduct($data)
  {
    //create insert string
    $stmt = "UPDATE station SET productID = '".$data['productID']."',
                                name = '".$data['name']."',
                                   price = '".$data['price']."',
                            durability =  '".$data['durability']."'
                            WHERE productID = ".$data['productID']." ;";

    //commit db request
    $result = $this->db->query($stmt);

    if($result == 1)
    {
      return "OK";
    }

    return "your statement: ".$stmt."<br /> received result:".$result;
  }


// D elete

   public function removeProduct($productID)
   {
      $allProducts = array();
      $stmt = "DELETE FROM products WHERE productID = ".$productID.";";
      $result = $this->db->query($stmt);

       if($result == 1)
       {
         return "product succesfully deleted.";
       }

       return "your statment: ".$stmt."<br /> received result:".$result;
   }
}

