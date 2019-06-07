<link rel="stylesheet"  href="packages.css">
   
   <?php

    include "dbcon.php";

      //select all columns from table 
      $sql="SELECT * from packages";
      print'<div class="container">'; 
      
      // If connection to database and selected right table true continue
    if ($result=mysqli_query($dbh,$sql))
      {
        
               
      
      // Fetch one and one row, at time 
       while ($row=mysqli_fetch_row($result))
      
          // The value of this is row one column number
      
echo <<<GO
     
      	       
       <div class="card" style="height:430px">
             <img src=$row[7] alt="Vacation Packages" style="width:100%">
                <div class="text"> 
                  <h5>$row[1]</h5>
                    <p class="date">$row[2] <br>  
                      $row[3]</p>
                    <p class="price">ONLY $$row[5]</p>
                    <p>$row[4]<p
	    
                <form method='post' action='package$row[0].php'>
                  <input class="book btn-outline-success" type='submit' value='Details' name=$row[0]></input>
                </form>
		
           
        
GO;
	   
            // Create a variable //
               $hits = file("counter1.txt");
               //Add one to the file //
               $hits[0] ++;
               //Open the file and write on file//
               $fp = fopen("counter1.txt", "w");
              // Fput writes the first part in the brackets//
               fputs($fp , "$hits[0]");
               //Close file// 
               fclose($fp);
               echo  $hits[0].'clicks';
	       print '</div>';
	       print '</div>';
                
              
			     
	    
      }
     
             
?>
    
          
          

