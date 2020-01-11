<?php
//=========dbvariables.php===============
//------Author: Wei Guang Yan------------

//----data for logging in database-------
//=======================================

   //$host = "localhost";
   //$user = "root";
   //$password = "";
  // $dbName = "travelexperts";
 
  $dbServername="remotemysql.com";
  $dbUsername="VVM1l1CnNR";
  $dbPassword="Vr1Dq4ju2f";
  $dbname="VVM1l1CnNR";  


   /*
      @Jonathan Arca
      Establish connection
   */
   $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbname);

   if (!$conn) {
      die("Connection failed: ".mysqli_connect_error());
   }
?>
