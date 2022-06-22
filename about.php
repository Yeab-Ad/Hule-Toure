<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<link rel="icon" type="image/png" href="img/logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>Hule Tour</title>
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
				<li class="active"><a href="about.php">About</a></li>
				<?php
				// if (isset($_SESSION['userId'])) {
					if (isset($_SESSION['admin'])) {
						echo '
					<li ><a style="width: 172px!important;" href="adminDashboard.php">Admin Dashboard</a></li>
					<li  style="position: relative;  top: 5rem;" class="login"><a href="Logout.php">Logout</a></li>';
				}elseif (isset($_SESSION['userId'])) {

				 echo '
				<li><a href="dashboard.php">Dashboard</a></li>
					<li class="login"><a href="Logout.php">Logout</a></li>';
				}else {
				echo '
				<li class="login"><a href="Login.php">Login</a></li>';
			}
 ?>
			</ul>
		</nav>
	</div>
</header>
<!-- header bar end -->

<!-- headline start -->

<div class="aboutImage">
	<div class="banner">
		<h1>Who we are</h1><br>
		<h3>How we start up and what we do  . . . </h3><br><br>
		<?php
		if (isset($_SESSION['userId'])) {
			echo '
		<button type="button" name="button"><a href="booking.php">Book Now</a></button><br><br>';
	}else {
	echo '
	<button type="button" name="button"><a href="Login.php">Book Now</a></button><br><br>';
}?>

	</div>
</div>
<!-- headline end -->

<!-- mainbody start -->
<div id="container">
	<aside class="sidebar">
		<div class="side dest">
		</div>
		<div class="side hot">
			<h2>Hot Deals</h2>
			<div class="figure">
				<figure>
					<img src="img/hot1.jpg" alt="Unity Park for 6 days">
					<figcaption>unity Park 6 days</figcaption>
				</figure>
				<figure>
					<img src="img/hot2.jpg" alt="Hiking for 4 days">
					<figcaption>Hiking for 4 days</figcaption>
				</figure>
				<figure>
					<img src="img/hot3.jpg" alt="semen mount for 5 days">
					<figcaption>semen mount for 5 days</figcaption>
				</figure>
				<figure>
					<img src="img/hot4.jpg" alt="Temeket for 8 days">
					<figcaption>Temeket for 8 days</figcaption>
				</figure>
				<figure>
					<img src="img/hot5.jpg" alt="lalibela for 7 days">
					<figcaption>lalibela for 7 days</figcaption>
				</figure>
				<figure>
					<img src="img/hot6.jpg" alt="Fasiledes for 4 days">
					<figcaption>Fasiledes for 4 days</figcaption>
				</figure>
				<figure>
					<img src="img/hot7.jpg" alt="Aksum for 9 days">
					<figcaption>Aksum for 9 days</figcaption>
				</figure>
				<figure>
					<img src="img/hot8.jpg" alt="Ertale for 3 days">
					<figcaption>Ertale for 3 days</figcaption>
				</figure>
			</div>
		</div>
		<div class="side box">
			<h2>Tools</h2>
			<div class="tool">
				<ul>
					<li><a href="###" class="tool1">Weather</a></li>
					<li><a href="###" class="tool2">Train</a></li>
					<li><a href="###" class="tool3">Flight</a></li>
					<li><a href="###" class="tool4">Subway</a></li>
				</ul>
			</div>
		</div>
	</aside>
	<div class="list about">
		<section>
			<h2>About us</h2>
			<p>Hule Tour travel agency was founded in April, to "make travel easier" for the mission,
			to provide tours.
			Wonderful travels, lowest price, 24 hrs x 365 days telephone reservations
			and offers a wealth of follow-up services.
			</p>
			<p>So far, we provide more than a 20 kinds of tourism products for you to choose,
			include group travel, flight booking, cruise, hotels, visas, and scenic spots.
			We have successfully served a total of more than 140,000 travelers.
			</p>
			<p>At the same time, the community based on Hule Tour global can better help visitors understand
			the destination information, and properly develop comprehensive travel plans, and easily book journey services.
			</p>
			<p>&nbsp;</p>
		</section>
		<section>
			<h2>Contact</h2>
			<address>
				<ul>
					<li>Hule Tour Travel Agency</li>
					<li><a href="###">Email: info@huletour.com</a></li>
					<li><a href="###">Phone: +251 923221211.</a></li>
					<li><a href="###">Address: Megenaga, Addis Ababa, Ethiopia.</a></li>
				</ul>
			</address>
		</section>
	</div>
</div>
<!-- mainbody end -->

<!-- footer start -->
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
				<li><a href="###">What is the best time travel to Australia.</a></li>
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
</html>
