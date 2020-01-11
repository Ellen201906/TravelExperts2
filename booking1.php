
<!DOCTYPE html>

<head>
   <meta charset="utf-8" />	
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<?php include 'header.php';?>
    <title>Booking Page</title>
    
<style>
#packdesc{  margin-left:50px;
           }

.box {
            margin-left: 600px;
            float:right
            width:300px;
            height:300px; 
          
        }
        .imgsize {
            width: 220px;
            height: 180px;
        }
        .position{
            margin-bottom:0px;
        }

#iddesc{margin-left:50px}
#select1,#input1,#input2,#input3{width:110px;height:30px;}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}



.container {
  background-color: #f2f2f2;
  padding: 3px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn1 {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn1:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}




/*placeholdercolor*/
::-webkit-input-placeholder { /* WebKit browsers */
    color:#ccc;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    color:#ccc;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
    color:#ccc;opacity:1;
}
:-ms-input-placeholder { /* Internet Explorer 10+ */
    color:#ccc !important;
}


input[type=text] {
  width:100%;
  margin-bottom: 10px;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type=email] {
  width:100%;
  margin-bottom: 20px;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=month] {
  width:100%;
  margin-bottom: 10px;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 3px;
}



label {
  margin-bottom: 5px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.class1{
height:40px;
width:100%;

}

.btn1 {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn1:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column;
  }
  .col-25 {
   
    margin-bottom: 20px;
  }
}

.ok{visibility:hidden}
</style>

</head>
<html>
<body>

<?php
    
   
include "dbcon.php";

//get package ID print package information
    $ID=array_keys($_GET)[0];
    //PRINT $ID;
    $result = mysqli_query($dbh, "SELECT * FROM packages where PackageId=$ID");
	  $row = mysqli_fetch_row($result);
     
        print "<div id='packdesc'>";
        print "<h5>$row[4]</h5>";
        print "<h5>start date: ".$row[2]."</h5>";
        print "<h5>end date: ".$row[3]."</h5>"; 
        print "<h5>price :$".$row[5]."  (Canadian dollar) </h5>";
        print "</div>";
         
		 //display package pictures in slideshow
		
	?>


<!-- ask number of customers-->
   <div id="iddesc">
	 <form action="" method="post"> <span>How many travellers do you have?</span>
       <select name="q" id="mySelect">
        <option value="1">1</option>
        <option value="2">2</option>
	    <option value="3">3</option>
	     <option value="4">4</option>
         <option value="5">5</option>
	     <option value="6">6</option>
	    </select>
	   <input type="submit" value="submit" >
	 </form>

	<?php

//get number of customers,let customer fill in personal information.
	error_reporting( E_ALL&~E_NOTICE );
	$number=$_POST["q"];
    $i=1;
    print "<br>";
    print "<p >You have  ".$number."   travller(s)<p>";
    print "<p><i class='fa fa-warning' style='font-size:22px;color:red'></i>Important: Traveller names must match your government-issued photo ID exactly.<p><br>";
	print "<p> * All information are required</p><br>";

	while ($i<= $_REQUEST["q"]){
	echo <<<EOT
   <div>
    
    
     <p><i class='fas fa-portrait text-info' style='font-size:36px;'></i>Traveller $i</p>	
     
	 <div class="container-fliud">
	 <div class="row" style="border:1px solid #ccc;background-color:lightgrey;margin-bottom:10px;">
	   <div class="col-xs-2">
	      <p >Title</p>
		   <select id='select1'><option value='Mr'>Mr</option><option value='Mrs'>Mrs.</option><option value='Ms'>Ms.</option></select>
		   <br><br>
		    </div>
			
			<div class="col-xs-2">
			<p >First name<sup>*</sup></p>
	         <input id='input1' type='text' name='fname'>
		   </div>
		   
		   <div class="col-xs-2">
		   <p>Middle name</p>
		      <input id='input2' type='text' name='mname'>
		   </div>

		   <div class="col-xs-2">
		   <p>Last name<sup>*</sup></p>
		   <input id='input3' type='text' name='lname'>
		    </div>

			<div class="col-xs-2">
			<p>Birthday</p>
			<input  type="date" name="birth" value="birth"> 
		   </div>
	 </div>
	 
	 
	  



EOT;
$i++;
}
?>
  
<!--let customer fill in information about payment-->
</div>
<br>
<p style="margin-left:50px;font-size:18px">How do you want to pay?<p>
<p  style="margin-left:50px"><img src="phone.png" style="width:30px">Help telephone 1-403-686-8429      <a href="contact.php">contact us</a>
			</p>
</div>

<div class="container">
<div class="row">
  <div class="col-75">
    <div class="container">
	 <form action="booking2.php" method="request"> 
   
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>  
			<label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
		<p> * All information are required</p>
		<br>
		
		   <div class="row">
              <div class="col-50">
			  <label for="CustFirstName"><i class="fa fa-user"></i> First Name<sup>*</sup>
            <input type="text" id="fname" name="CustFirstName" placeholder="John" required></label>
              </div>
              <div class="col-50">
               <label for="CustLastName"><i class="fa fa-user"></i>Last Name<sup>*</sup>
            <input type="text" id="lname" name="CustLastName" placeholder="Doe" required></label> 
              </div>
            </div>
			
			<label for="CustAddress"><i class="fa fa-address-card-o"></i>Address
            <input type="text" id="adr" name="CustAddress" placeholder="14 Meleod Street"></label>
            
            <div class="row">
			   <div class="col-50">
			     <label for="CustCity"><i class="fa fa-institution"></i>City
                 <input type="text" id="city" name="CustCity" placeholder="Calgary"></label>
			   </div>
               <div class="col-50">
                 <label for="CustProv ">Province
                 <select class="class1" name="CustProv" id="prov">
				    <option value="AB">Alberta</option>
					<option value="BC">British Columbia</option>
					<option value="MB">Manitoba</option>
					<option value="NB">New Brunswick</option>
					<option value="NL">Newfoundland and Labrador</option>
					<option value="NS">Nova Scotia</option>
					<option value="ON">Ontario</option>
					<option value="PE">Prince Edward Island</option>
					<option value="QC">Quebec</option>
					<option value="SK">Saskatchewan</option>
					<option value="NT">Northwest Territories</option>
					<option value="NU">Nunavut</option>
					<option value="YT">Yukon</option>
				 </select></label>
              </div>

			  <div class="row">
                <div class="col-50">
                  <label style="margin-left:14px" for="CustPostal">postal code
                  <input  style="width:200px" type="text" id="postal"  onblur="post()"  name="CustPostal" placeholder="T5A 3A8" required></label>
                </div>
			    <div class="col-50">
			      <label for="CustHomePhone"><i class="fa fa-phone"></i>HomePhone<sup>*</sup></label>
                  <input style="width:200px" type="text" id="hphone" name="CustHomePhone" placeholder="780-680-8421" required></label>
			   </div>
			  </div>


            </div>

			 <label for="CustEmail"><i class="fa fa-envelope"></i>Email
                   <input class="class1" type="email" id="email" name="CustEmail" placeholder="john@example.com"></label>

			

          </div>

          <div class="col-50">
            <h3>Payment
			</h3>
		        
              <label>Accepted Cards
              
			  <i style='font-size:24px;color:blue;' class='fab'>&#xf1f0;</i>
			  <i style='font-size:24px;color:red' class='fab'>&#xf1f3;</i>
			  <i style='font-size:24px;color:orange;' class='fab'>&#xf416;</i>
			  <i style='font-size:24px;color:green' class='fab'>&#xf1f1;</i>
              
              </label>
         
			<p style="font-size:16px">Please select a valid year of credit card expiration.<p>
			<br>
			<label for="CCName">Name on Card<sup>*</sup></label>
            <input type="text" onblur="cname1()" id="cname" name="CCName" placeholder="John Doe" required><span id="cname1" class="ok">name is ok<i class="fa fa-check" style="font-size:14px"></i></span>
            <label for="CCNumber ">Credit card number<sup>*</sup></label>
            <input type="text" onblur="ccnum1()" id="ccnum" name="CCNumber" placeholder="1111-2222-3333-4444" required><span id="cnumber1" class="ok">number is ok<i class="fa fa-check" style="font-size:14px"></i></span>
			 <label for="expmonth">Exp Month and Year<sup>*</sup></label>
            <input type="month"  name="expmonth" required>
			<br><br>
            <div >
                <label for="cvv">CVV<sup>*</sup></label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
        </div>
        </div>
        
		<input type="submit" value="Continue to checkout" class="btn1">
      </form>
    </div>
  </div>

      <div class="row">
  	 <div class="col-25">	 
    <div   class="container">
	<?php
    //calculate total price for customers
	print  '<h4><img style="width:150px" src="shoppingcart.gif"></i> <b>Traveller(s):'.$_POST["q"].'</b></h4>';
    $total=$row[5]*($_POST["q"]); 
    $i=1;
    while ($i<=$_POST["q"]) 
    {
      
      PRINT '<p>'.$i.'<a href="#"> traveller(s)<a/>';  
     print '<span class="price">$'.$row[5]. '</span></p>';
    
    $i++;
    }
    print '<hr>';
	  print '<p>Total price : <span class="price" style="color:black"><b>$'.$total.'</b></span></p>';
	  ?>
      </div>
	  </div>
	   </div>
	  </div>

 
	
<!--check if postal number name, number on creditcard   is valid-->
<script>
      function post() {
                var str = document.getElementById("postal").value;
                var patt = /^[A-Z]\d[A-Z] ?\d[A-Z]\d$/;
                if (patt.test(str)) {
                    alert("right postal code");
                }
                else 
                    { alert("wrong postal code");}
               
            }
 

         function cname1() {
           var str = document.getElementById("cname").value;
                var patt = /^[A-Za-z]/;
                if (patt.test(str)) {
                    document.getElementById("cname1").style.visibility = "visible";
                }
                else 
                    { alert("wrong name format");}
            }

            function ccnum1() {
                 var str = document.getElementById("ccnum").value;
                var patt = /^[0-9]/;
                if (patt.test(str)) {
                    document.getElementById("cnumber1").style.visibility = "visible";
                }
                else 
                    { alert("should be number");}
            }

		</script>
		<?php include 'footer.php';?>

</body>
</html>