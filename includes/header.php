<header id="header">
	<div  class="center">
		<h1 class="logo"></h1>
		<nav class="link">
			<ul>
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="tour.php">Tours</a></li>
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