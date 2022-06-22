<?php

session_start();
  
   include("connection.php");
   include("func.php");
   $data = check_login($con);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <title>HuleTour</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <!-- header bar start -->
  <header id="header">
    <div class="center">
      <h1 class="logo"></h1>
      <nav class="link">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="tour.php">Tours</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="about.php">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="centerr">
    <div class="banner">
      <h1>       Welcome to <br> Hule Tour Offical Website</h1><br>
      <button type="button" name="button"><a href="#">Read More</a></button><br><br> 
      <p>Are you member of Hule Tour ?</p><br>
      <button type="button" name="button"><a href="#">Register Now</a></button>
    </div>
  </div>

</body>

</html>
