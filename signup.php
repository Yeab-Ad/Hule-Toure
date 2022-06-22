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
				<?php
	if (isset($_SESSION['userId'])) {
		echo '<li class="login"><a href="Logout.php">Logout</a></li>';
	}else {
	echo '
	<li class="login"><a href="Login.php">Login</a></li>';
	}
 ?>
			</ul>
		</nav>
	</div>
</header>
<body>
  <div class="register">
  	<div class="signup-form">

  			<div class="newTo">
  				Signup to Hule Tour And Travel
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
					    color: red;'> please enter a valid email</p> ";
				}
				 elseif (strpos($url, "error=sqlerror")==true) {
						echo " <p style='  position: relative;
						    top: 4rem;
						    font-size: 20px;
						    color: red;'> there was an error , please register again </p> ";
					}
					elseif (strpos($url, "error=usertaken")==true) {
						echo " <p style='  position: relative;
						    top: 4rem;
						    font-size: 20px;
						    color: red;'> user already taken</p> ";
					}
					elseif (strpos($url, "error=emailtaken")==true) {
						echo " <p style='  position: relative;
						    top: 4rem;
						    font-size: 20px;
						    color: red;'> email already taken</p> ";
					}
					elseif (strpos($url, "error=passcheck")==true) {
						echo " <p style='  position: relative;
						    top: 4rem;
						    font-size: 20px;
						    color: red;'> password didn't match</p> ";
					}
					elseif (strpos($url, "signup=success")==true) {
						header("Location: Login.php?signup=success");
						exit();
						
					}

				 ?>
  		<form  method="POST" action="register.php">
			<input type="text" name="fname" placeholder="Full Name"> <br><br>
			<input type="email" name="email" placeholder="Enter valid Email"><br><br>
			<input type="password" name="password" placeholder="Password"><br><br>
			<input type="password" name="password_c" placeholder="Confirm Password"><br><br><br><br>
    <button type="submit" name="signup-submit">Signup</button>
  		</form>
  			<div style="text-align-last: center;
  			color: white;
  			" class="alreadyMember">Already a member?<a style="color: black;" href="Login.php">  Login here</a> <br><br> Back to <a  style="color: black;"href="index.php">Home Page</a> </div>
  	</div>
  </div>
  <!-- signup ends -->
</body>
</html>
