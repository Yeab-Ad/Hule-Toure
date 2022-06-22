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
	<script type="text/javascript" src="js/style.js"></script>  
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<!-- header bar start -->
<header id="header">
	<div class="center ">
		<h1 class="logo"></h1>
		<nav class="link">
			<h2 class="hidden">navigation</h2>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li class="active"><a href="tour.php">Tours</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="about.php">About</a></li>
				<?php
				// if (isset($_SESSION['userId'])) {
					if (isset($_SESSION['admin'])) {
						echo '
					<li><a style="width: 172px!important;" href="adminDashboard.php">Admin Dashboard</a></li>
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

<div class="tour-img">
	<div class="banner">
		<h1>Travel Info</h1><br><br><br>
		<?php
		if (isset($_SESSION['userId'])) {
			echo '
		<button type="button" name="button"><a href="booking.php">Book Now</a></button><br><br>';
	}else {
	echo '
	<button type="button" name="button"><a href="Login.php">Book Now</a></button><br><br>';
}?>
		<h3>The latest travel information, news, and tips.</h3><br>
	</div>
</div>

<!-- mainbody start -->
<div id="container">
	<aside class="sidebar">
		<div class="side dest">
			<h2>Destinations</h2>
			<div class="tag">
				<ul>
					<li><a href="###">Gonder(7)</a></li>
					<li><a href="###">Gojam(5)</a></li>
					<li><a href="###">Bale(6)</a></li>
					<li><a href="###">Addis Ababa(3)</a></li>
					<li><a href="###">Aksum(6)</a></li>
					<li><a href="###">Abay(3)</a></li>
					<li><a href="###">Afar(2)</a></li>
					<li><a href="###">Gurage(1)</a></li>
					<li><a href="###">Lalibela(5)</a></li>
				</ul>
			</div>
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
					<li><a href="###" class="tool4">Subway</a></li>
				</ul>
			</div>
		</div>
	</aside>
	<div class="list information">
		<h2>Travel information</h2>
		<figure class="tour">
			<img src="img/tour1.jpg" alt="Semen Mountain Park for 6 days">
			<figcaption>
				<article>
					<header>
						<hgroup>
							<h2>Semen Mountain Park</h2>
							<h3 class="sm-hidden">Special for group travelling with no extra cost...</h3>
						</hgroup>
					</header>
					<ol class="sm-hidden">
						<li><mark>Flight</mark> Ethiopian Airlines, non-stop</li>
						<li><mark>Date</mark> 19/04/21</li>
					</ol>
					<div class="buy">
						<div class="price">birr<strong>1864</strong> <s style="text-decoration: line-through;">2980birr</s></div>
						<div class="book sm-hidden">
							<?php
						if (isset($_SESSION['userId'])) {
						echo '
							<a href="booking.php">Book now</a>';
						}else {
						echo '
							<a href="Login.php">Book now</a>';
						}
						?>

						</div>
					</div>
					<div class="type">Overseas</div>
					<div class="disc"><span>35%Off</span></div>
					<footer class="sm-hidden">
						The special price will end at <time>01/10/2021</time>
					</footer>
				</article>
			</figcaption>
		</figure>
		<figure class="tour">
			<img src="img/tour2.jpg" alt="Fasiledes for 4 days">
			<figcaption>
				<article>
					<header>
						<hgroup>
							<h2>Fasiledes </h2>
							<h3 class="sm-hidden">Breakfast, lunch, cruise and flight included...</h3>
						</hgroup>
					</header>
					<ol class="sm-hidden">
						<li><mark>Flight</mark> Ethiopian Airlines, non-stop</li>
						<li><mark>Date</mark> 19/04/21</li>
					</ol>
					<div class="buy">
						<div class="price">birr<strong>1380</strong> <s style="text-decoration: line-through;"> 1980birr</s></div>
						<div class="book sm-hidden">
							<?php
						if (isset($_SESSION['userId'])) {
						echo '
							<a href="booking.php">Book now</a>';
						}else {
						echo '
							<a href="Login.php">Book now</a>';
						}
						?>
						</div>
					</div>
					<div class="type">Domestic</div>
					<div class="disc"><span>30%Off</span></div>
					<footer class="sm-hidden">
						The special price will end at <time>01/5/2021</time>
					</footer>
				</article>
			</figcaption>
		</figure>
		<figure class="tour">
			<img src="img/tour3.jpg" alt="Lalibela 5 days">
			<figcaption>
				<article>
					<header>
						<hgroup>
							<h2>Lalibela</h2>
							<h3 class="sm-hidden"></h3>
						</hgroup>
					</header>
					<ol class="sm-hidden">
						<li><mark>Flight</mark> Lalibela, non-stop</li>
						<li><mark>Date</mark> 19/04/21</li>
					</ol>
					<div class="buy">
						<div class="price">birr<strong>2100</strong> <s style="text-decoration: line-through;"> 2980birr</s></div>
						<div class="book sm-hidden">

							<?php
						if (isset($_SESSION['userId'])) {
						echo '
							<a href="booking.php">Book now</a>';
						}else {
						echo '
							<a href="Login.php">Book now</a>';
						}
						?>

						</div>
					</div>
					<div class="type">Domestic</div>
					<div class="disc"><span>28%Off</span></div>
					<footer class="sm-hidden">
						The special price will end at <time>19/04/21</time>
					</footer>
				</article>
			</figcaption>
		</figure>

		<div class="more">More...</div>
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
