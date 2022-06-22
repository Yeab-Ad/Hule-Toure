<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="img/logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>HuleTour</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<!-- header bar start -->
<header id="header">
	<div class="center">
		<h1 class="logo"></h1>
		<nav class="link">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="tour.php">Tours</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="about.php">About</a></li>
				<li class="active"><a href="signup.php">Signup</a></li>
			</ul>
		</nav>
	</div>
</header>
<body>
  <div class="register">
  	<div class="signin-form">

  			<div class="newTo">
  				Signin to Hule Tour And Travel
  			</div>
				<?php
				$url="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				if (strpos($url, "error=emptyfields")==true) {
					echo " <p style='  position: relative;
					    top: 4rem;
					    font-size: 20px;
					    color: red;'> please fill correct information</p> ";
				}
				elseif (strpos($url, "error=invalidemail")==true) {
					echo " <p style='  position: relative;
					    top: 4rem;
					    font-size: 20px;
					    color: red;'> Login failed. Invalid username or password</p> ";
				}elseif (strpos($url, "signup=success")==true) {
					echo " <p style='  position: relative;
							top: 4rem;
							font-size: 20px;
							color: red;
							z-index: 1000000;'> signup successfully pleases <a  style='color: black;'>  Login here</a></p> ";
				}
				else {
					echo "";
				}
				     ?>
  		<form action="registerlogin.php" method="POST">
  		 <input type="email" name="email" placeholder="Enter valid Email"><br><br>
  		 <input type="password" name="Password" placeholder="Password"><br><br><br><br><br>
  		 <button type="submit" value="button">Submit</button>
  		</form>
  			<div class="alreadyMember"><a style='color: black;'href="signup.php">Signup here</a> if you are not a member  <br><br><br> Back to <a style='color: black;' href="index.php">Home Page</a></div>
  	</div>
  </div>
  <!-- signup ends -->
</body>
</html>
