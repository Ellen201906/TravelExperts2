<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start(); 
}

?>
 <!-- Global site tag (gtag.js) - Google Analytics -->
       <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141671115-1"></script>
       <script>
        window.dataLayer = window.dataLayer || [];
       function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-141671115-1');
</script>
    
<div id="header">
  <a href="index.php"><img src="logosmall.gif" id="logo" alt="My Image" title="Our logo" /></a>
   
	<a href="index.php">Home |</a>
    <a href="register.php">Register |</a> 
    <a href="contact.php">Contact |</a>
	
  <nav id="nav1">
    <?php
      if (isset($_SESSION['username'])) {
        $user = $_SESSION['username'];
        echo <<< logout
        <form id="logout" action="logout.php" method="post">
        </form>
        <h4>Hello $user </h4>
logout;
      }
      else {
        echo <<< login
        <form action="login.php" method="post" id="formsize" >
          <input type="text" name="username" placeholder="username" aria-describedby="inputGroup-sizing-sm" value="" style="width:120px; ">
          <input type="password" name="password" placeholder="password" aria-describedby="inputGroup-sizing-sm" value="" style="width:120px">
          <button type="submit" name="login-submit">Login</button>
        </form>
        
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
    <button class="navbar-toggler" type="button" data-toggle="collapse" dropdown-toggle" data-toggle="dropdown" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
