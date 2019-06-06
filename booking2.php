<HTML>
<HEAD>
<TITLE>Your Form Values</TITLE>
 <meta charset="utf-8" />
   
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
	<?php  include 'header.php'; ?>
</HEAD>
<BODY>
<?PHP

//print form 
   /* This page prints the form field names and values
   that were received
    */
   

    //get value of column from form
  $name1=$_REQUEST['CustFirstName'];
  $name2=$_REQUEST['CustLastName'];
   $name3=$_REQUEST['CustAddress'];
  $name4=$_REQUEST['CustCity'];
   $name5=$_REQUEST['CustProv'];
  $name7=$_REQUEST['CustPostal'];
  $name8=$_REQUEST['CustHomePhone'];
  $name10=$_REQUEST['CustEmail'];

  
//connect to database 

   	 include "dbcon.php";
	
//select database and insert customer personal information
   $result = mysqli_query($dbh, "SELECT * FROM customers");

   $sql = "insert into customers (CustFirstName,CustLastName,CustAddress,CustCity,CustProv,CustPostal,CustHomePhone,CustBusPhone,CustEmail) 
   values ('$name1','$name2','$name3','$name4','$name5','$name7','$name8','12','$name10')"; 
   // $sql = "insert into customers (CustFirstName,CustLastName,CustAddress,CustCity,CustProv,CustPostal,CustHomePhone,CustEmail) 
   //values ('1','2','3','4','5','7','8','10')"; 
   
   $result = mysqli_query($dbh, $sql);
   
   //get value of id after inserting
   $result1 = mysqli_query($dbh,"SELECT * FROM customers ORDER BY CustomerId  desc limit 1");
   while($row = mysqli_fetch_array($result1))
   {  
       $id1=$row['CustomerId'];
   }

   
   ?>

   <br><br><br>
  <?php
   //get information for payment
   $name1=$_REQUEST['CCName'];
   $name2=$_REQUEST['CCNumber'];
   $name3=$_REQUEST['expmonth'];
   $name5=$_REQUEST['cvv'];
 
   
   //connect database
 
   
   //insert information into creditcard table
   $result = mysqli_query($dbh, "SELECT * FROM creditcards");
   $sql = "insert into creditcards (CCName,CCNumber,expmonth,expyear,cvv,CustomerId) values ('$name1','$name2','$name3','2019','$name5','$id1')";
   //$sql = "insert into creditcards (CCName,CCNumber,expmonth,cvv,CustomerId) values ('1','2','3','5',1)";

   //print $sql;
   
	$result = mysqli_query($dbh, $sql);
	if ($result)
	{
	 print("your order is successfully submitted!");
	}
	else
	{
	 print("please call our technical support, thank you!");
	}
  
 
?>

<h1 style="text-align:center;margin:100px"> Thank you for choosing TravelExpert!</h1>


<?php include 'footer.php' ?>
</BODY>
</HTML>
