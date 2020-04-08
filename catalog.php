<?php
session_start(); 
if ( isset($_POST["Item"]) ) 
{
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"]; 
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "S001":
         $_SESSION["Name"] = "10吋變形平板";
         $_SESSION["Price"] = 12000;
         break;
      case "S002":
         $_SESSION["Name"] = "15.6吋筆記型電腦";
         $_SESSION["Price"] = 27000;
         break;
      case "S003":
         $_SESSION["Name"] = "iPhone手機";
         $_SESSION["Price"] = 21000;
         break;   
   }  
   header("Location: savecart.php");  
}
?>