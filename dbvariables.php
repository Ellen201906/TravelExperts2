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
  $dbUsername="UN6AGWHSo2";
  $dbPassword="O3AyO1IXuu";
  $dbname="UN6AGWHSo2";

   /*
      @Jonathan Arca
      Establish connection
   */
   $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbname);

   if (!$conn) {
      die("Connection failed: ".mysqli_connect_error());
   }
?>
