<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start(); 
}

?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<div id="header">
  <a href="index.php"><img src="logosmall.gif" id="logo" alt="My Image" title="Our logo" /></a>
   
	<a   href="index.php">Home |</a>
    <a href="register.php">Register |</a> 
    <a href="contact.php">Contact |</a>
	
  <nav id="nav1">
    <?php
      if (isset($_SESSION['username'])) {
        $user = $_SESSION['username'];
        echo <<< logout
        <form id="logout" action="logout.php" method="post">
        </form>
        <h5>Hello $user </h5>
logout;
      }
      else {
        echo <<< login
		
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
  login
</button>
 

<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
 
   
      <div class="modal-header">
        <h5 class="modal-title">log in to your account</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
 
      <div class="modal-body">
        <form action="login.php" method="post" id="formsize" >
		  <label style="width:100px">Use name</label>
          <input type="text" name="username" placeholder="Username" aria-describedby="inputGroup-sizing-sm" value="" >
		  <br>
		  <label style="width:100px">Password</label>
          <input type="password" name="password" placeholder="Password" aria-describedby="inputGroup-sizing-sm" value="">
		  <br><br>
          <button style="width:400px" type="submit" name="login-submit">Login</button>
        </form>
      </div>
 
   
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
      </div>
 
    </div>
  </div>
</div>
        
        
login;
      }

    ?>
	
    <?php
    if (isset($_SESSION['username'])) {
    echo <<< logoutbutton
     <span id="logoutbtn" style="margin-left:70px;color:black" mouseover="console.log('dsfs');" onclick='document.forms["logout"].submit()'; style="color:#007bff;">Logout</span>
logoutbutton;
    }
    ?>

  </nav>
  <br>
  <br>
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Car</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Hotel</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" data-hover="dropdown">Flight</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="https://www.google.com/">Link 1</a>
            <a class="dropdown-item" href="#">Link 2</a>
            <a class="dropdown-item" href="#">Link 3</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" data-hover="dropdown">Travel Articles</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Link 1</a>
            <a class="dropdown-item" href="#">Link 2</a>
            <a class="dropdown-item" href="#">Link 3</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" data-hover="dropdown">Travel Tips</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Link 1</a>
            <a class="dropdown-item" href="#">Link 2</a>
            <a class="dropdown-item" href="#">Link 3</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="float-right">
      <form class="form-inline">
        <input class="form-control " type="text" placeholder="Search" style="width:100px;font-size:14px">
        <button class="btn bg-info" type="button"><img style="width:30px;" src="search.jpg"></button>
      </form>
    </div>
  </nav>
</div>