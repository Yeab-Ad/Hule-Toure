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
	<script type="text/javascript" src="js/style.js"></script>  

	<link rel="stylesheet" href="css/styles.css">
</head>

<body>
<!-- header bar start -->
<?php
require 'includes/header.php'
?>
<div class="centerr">
	<div class="banner">
		<!-- <?php
    if (isset($_SESSION['userId'])) {
      echo "<p>You are loged in !</p>";
    }else {
    echo "<p>You are loged out !</p>";
    }
   ?> -->
		<h1>       Welcome to <br> Hule Tour Offical Website</h1><br>
		<button type="button" name="button"><a href="about.php">Read More</a></button><br><br>
		<p>Are you member of Hule Tour ?</p><br>
		<button type="button" name="button"><a href="signup.php">Register Now</a></button>
	</div>
</div>
<!-- popular tours start -->
<div id="tour">
	<section class="popular center">
		<h2>Popular Tours</h2>
		<p>Local and overseas travel deals<span class="sm-hidden">, airfares, cruises, coach tours, holiday packages, and travel tips.</span></p>
	</section>
	<figure>
		<img src="img/tour1.jpg" alt="Semen Mountain Park for 6 days">
		<div>
			<div class="tour_title">
				<p class="title">Semen Mountain Park for 6 days</p>
				Special for group travelling, countless scenic spots with no extra cost.
			</div>
			<div>
				<section class="sat">Rating 87%</section>
				<div class="price"><h4>From ETB <h1>4,698</h1></h4></div>
			</div>
		<div class="type">Domestic</div>
		</div>
	</figure>
	<figure>
		<img src="img/tour2.jpg" alt="Fasiledes  Island for 4 days">
		<div>
			<div class="tour_title">
				<p class="title"> Fasiledes for 4 days </p>
				Start from Addis Ababa, breakfast, lunch, cruise and flight included.
			</div>
			<div>
				<section class="sat">Rating 91%</section>
				<span class="price"><h4>From ETB <h1>4,698</h1></h4></span>
			</div>
			<div class="type">Domestic</div>
		</div>
	</figure>
	<figure>
		<img src="img/tour3.jpg" alt="Lalibela 5 days ">
		<div>
			<div class="tour_title">
				<p class="title"> Lalibela 5 days e </p>
			</div>
			<div>
				<section class="sat">Rating 88%</section>
				<span class="price"><h4>From ETB <h1>4,698</h1></h4></span>
			</div>
			<div class="type">Domestic</div>
		</div>
	</figure>
	<figure>
		<img src="img/tour4.jpg" alt="Spend Meskel Holyday for 3 days">
		<div>
			<div class="tour_title">
				<p class="title"> Spend Meskel Holyday for 3 days </p>
				Enjoy the most famous holydays of Ethiopia, food, drink and landscape.
			</div>
			<div>
				<section class="sat">Rating 96%</section>
				<span class="price"><h4>From ETB <h1>4,698</h1></h4></span>
			</div>
			<div class="type">Domestic</div>
		</div>
	</figure>
	<figure>
		<img src="img/tour5.jpg" alt="Unity park">
		<div>
			<div class="tour_title">
				<p class="title"> Unity park </p>
				Addis Ababa
			</div>
			<div>
				<section class="sat">Rating 98%</section>
				<span class="price"><h4>From ETB <h1>4,698</h1></h4></span>
			</div>
			<div class="type">Domestic</div>
		</div>
	</figure>
	<figure>
		<img src="img/tour6.jpg" alt="Aksum for 4 days">
		<div>
			<div class="tour_title">
				<p class="title"> Aksum for 4 days </p>
				Ethiopian famous ancient overland trade route.
			</div>
			<div>
				<section class="sat">Rating 83%</section>
				<span class="price"><h4>From ETB <h1>1,698</h1></h4></span>
			</div>
			<div class="type">Domestic</div>
		</div>
	</figure>
	<figure>
		<img src="img/tour7.jpg" alt="Ertale for 9 days">
		<div>
			<div class="tour_title">
				<p class="title"> Ertalefor 9 days </p>
			</div>
			<div>
				<section class="sat">Rating 92%</section>
				<span class="price"><h4>From ETB <h1>6,698</h1></h4></span>
			</div>
			<div class="type">Domestic</div>
		</div>
	</figure>
	<figure>
		<img src="img/tour8.jpg" alt="Semen Mountain 3 days for a family">
		<div>
			<div class="tour_title">
				<p class="title"> Semen Mountain 3 days for a family </p>
			</div>
			<div>
				<section class="sat">Rating 86%</section>
				<span class="price"><h4>From ETB <h1>3,698</h1></h4></span>
			</div>
			<div class="type">Domestic</div>
		</div>
	</figure>
	<figure>
		<img src="img/tour9.jpg" alt="Tia tikil dengay for 5 days">
		<div>
			<div class="tour_title">
				<p class="title"> Tia for 5 days </p>
			</div>
			<div>
				<section class="sat">Rating 90%</section>
				<span class="price"><h4>From ETB <h1>7,698</h1></h4></span>
			</div>
			<div class="type">Explore</div>
		</div>
	</figure>
</div>
<!-- popular tours end -->

<!-- signup starts -->
<div class="register">
	<div class="signup-form">

			<div class="newTo">
				Signup to Hule Tour And Travel
			</div>
		<form action="register.php" method="GET">
		 <input type="text" name="name" placeholder="First Name"> <br><br>
		 <input type="text" name="name" placeholder="Last Name "><br><br>
		 <input type="email" name="email" placeholder="Enter valid Email"><br><br>
		 <input type="password" name="Password" placeholder="Password"><br><br>
		 <input type="password" name="password-c" placeholder="Confirm Password"><br><br><br><br>
		 <button type="submit" value="button">Submit</button>
		</form>
			<div style="text-align-last: center;
			color: white;
			" class="alreadyMember">Already a member?<a href="#">  Login here</a></div>
	</div>
</div>
<!-- signup ends -->
<!-- footer start -->
<footer id="footer">
	<div class="top sm-hidden">
		<div class="column left">
			<h2>Partnership</h2>
			<hr>
			<ul>
				<li><a href="###">Yega Tour And Travel</a></li>
				<li><a href="###">Ride</a></li>
				<li><a href="###">Gara Hikink</a></li>
				<li><a href="###">Youth Travel Service</a></li>
			</ul>
		</div>
		<div class="column mid">
			<h2>FAQ</h2>
			<hr>
			<ul>
				<li><a href="###">When shall I sign the contract.</a></li>
				<li><a href="###">Where is Ethiopia</a></li>
				<li><a href="###">When can i pay the fee</a></li>
				<li><a href="###">How many kinds of travel insurance.</a></li>
				<li><a href="###">Can I change the date, is that free.</a></li>
			</ul>
		</div>
		<div class="column right">
			<h2>Contact</h2>
			<hr>
			<ul>
				<li><a href="###">Email: info@huletour.com</a></li>
				<li><a href="###">Phone: +251 923221211.</a></li>
				<li><a href="###">Address: Megenaga, Addis Ababa, Ethiopia.</a></li>
			</ul>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="bottom">Copyright &copy; Hule Tour 2021 | Developed by Light</div>
</footer>
<!-- footer end -->
</body>
</html?>
