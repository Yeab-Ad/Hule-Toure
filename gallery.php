<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="img/logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>DreamTour</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/style.js"></script>  
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
				<li class="active"><a href="gallery.php">Gallery</a></li>
				<li><a href="about.php">About</a></li>
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

<div class="gallery-img">
	<div class="banner">
		<h1>Gallery</h1><br>
		<h3>City, art, sea, mount, and people ...</h3><br><br>
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
	<div class="list scenery">
		<section>
			<h2>Explore the Beauty</h2>

			<!-- fech images from folders -->
				<?php
				$sub="./gallery";
				$target = "./img./{$sub}/";
				$target_path = "../{$target}/";
				 $dirname = "./{$target}/";
				 $images = glob($dirname."*.JPG");
				foreach($images as $image) {
				 echo '
<figure>
				 <img src="'.$image.'" />
	</figure>
				 <br />';

				}?>
			<!-- <figure>
				<img src="img/New/1 (1).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (2).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (3).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (4).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (5).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (6).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (7).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (8).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (9).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (10).JPG" alt="Bangkok - Pattaya">

			</figure>

			<figure>
				<img src="img/New/1 (11).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (67).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (13).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (14).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (68).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (16).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (17).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (18).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (19).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (20).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (21).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (22).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (23).JPG" alt="Bangkok - Pattaya">

			</figure>

			<figure>
				<img src="img/New/1 (24).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (26).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (27).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (28).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (29).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (30).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (31).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (32).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (33).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (34).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (35).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (36).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (37).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (38).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (39).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (40).JPG" alt="Bangkok - Pattaya">

			</figure>

			<figure>
				<img src="img/New/1 (43).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (44).JPG" alt="Bangkok - Pattaya">

			</figure>

			<figure>
				<img src="img/New/1 (47).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (48).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (49).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (51).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (69).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (53).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (54).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (56).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (57).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (66).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (59).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (60).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (61).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (62).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (63).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/New/1 (64).JPG" alt="Bangkok - Pattaya">

			</figure>
			<figure>
				<img src="img/gallery2.jpg" alt="Maldives Beas Island">

			</figure>
			<figure>
				<img src="img/gallery3.jpg" alt="Xian">

			</figure>
			<figure>
				<img src="img/gallery4.jpg" alt="Toyama-Osaka-Tokyo">

			</figure>
			<figure>
				<img src="img/gallery5.jpg" alt="Australia">

			</figure>
			<figure>
				<img src="img/gallery6.jpg" alt="The Silk Road">

			</figure>
			<figure>
				<img src="img/gallery7.jpg" alt="Europe">

			</figure>
			<figure>
				<img src="img/gallery8.jpg" alt="HongKong">

			</figure> -->
		</section>
		<div class="clearfix"></div>
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
	<div class="bottom">Copyright &copy; Dream Tour 2021 | Developed by Light</div>
</footer>
<!-- footer end -->
</body>
</html>
