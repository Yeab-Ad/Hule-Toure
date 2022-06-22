<?php
require 'connection.php';

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

<body >
	<?php
	//Prevent empty fields
	$tg = $place = $Reservation = $transport = null;
	$notg = $noplace = $noReservation = $notransport = null;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["place"])) {
	    $noplace = "*place is required";
	    $place = null;
	  } else {
	    $place = $_POST["place"];
	  }

	  if (empty($_POST["Reservation"])) {
	    $noReservation = "*Room is required";
	    $Reservation = null;
	  } else {
	    $Reservation = $_POST["Reservation"];}

	  if (empty($_POST["tg"])) {
	    $notg = "*Teacher in charge is required";
	    $tg = null;
	  } else {
	    $tg = $_POST["tg"];}
	    if (empty($_POST["transport"])) {
	      $notransport = "*Teacher in charge is required";
	      $transport = null;
	    } else {
	      $transport = $_POST["transport"];}

	}
	function ($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	return $data;}
	?>

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
					// if (isset($_SESSION['userId'])) {
						if (isset($_SESSION['admin'])) {
							echo '
						<li  ><a style="width: 172px!important;" href="adminDashboard.php">Admin Dashboard</a></li>
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
		<div class="Booking">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
<div class="center-content">
	<h2 class="booking_heading">Booking </h2>
</div>
			<br><br>
			<div class="center-content">

			<h2 class="booking_profile center-content">Travel Profile </h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<div class="">
			<br><br><br><br><br>
			<div class="form-style">
			Select travel place:
				<select name="place">
					<option></option>
					<?php

					$records = mysqli_query($conn,"select * from adminbooking"); // fetch data from database

					while($data = mysqli_fetch_array($records))
					{
					?>
							<option ><?php echo $data['place']; ?></option>

					<?php
				}
					?>

				</select></div><br><br>
				<div class="form-style">
				Choose Your Reservation:
					<select name="Reservation">
						<option value="Hotel">Hotel</option>
						<option value="Resturant">Resturant</option>
						<option value="Both">Both</option>
					</select></div><br><br>
					<div class="form-style">
					Choose Your Transportation:
						<select name="transport"><br><br>
							<option value="Plane">Plane</option>
							<option value="car">Car</option>

						</select></div><br><br>
						<div class="form-style">
						Do you want travel guider ?:<br>
								<input type="radio" name="tg" value="Yes"/>Yes
								<input type="radio" name="tg" value="no"checked />No
							</div><br><br>
								<div class="form-style-Paymentoption">
						<h2>Payment Options</h2><br><br>
						how many are you :
						<select name="payment"><br><br>
							number of attendant:
							<option></option>
							<option value="<3"> <3 </option>
							<option value="4-7">4-7</option>
							<option value="morethan-7">morethan 7</option>
						</select></div><br><br>
			</div>
			<p>
        <input type="submit" id="submit" name="submit">
        </p>
        </form>
				<div class="h2tags">
					<?php

	if (isset($_POST['submit'])) {
					//Insert data in mysql database
					$tg = $_POST['tg'];
					$place = $_POST['place'];
					$Reservation = $_POST['Reservation'];
					$transport = $_POST['transport'];
					$payment=$_POST['payment'];

					$conn = mysqli_connect("localhost","root","","huletour2");
					    if (mysqli_connect_errno()) {
					        die("Failed to connect to MySQL: " . mysqli_connect_error());
					    }
					    $sql = "INSERT INTO booking (place, Reservation,tg,payment, transport ) Values (?,?,?,?,?)";
							$sqli = "SELECT * FROM booking WHERE place='$place';";
					    $stmt = mysqli_prepare($conn, $sql);
					    mysqli_stmt_bind_param($stmt, "sssss",
								$place ,$Reservation ,$tg ,
								$payment,
								$transport);
								$results = mysqli_query($conn, $sqli);


						if (empty($place)) {
							echo "<h3>place field is empty</h3>";
				        exit();

				    }elseif (empty($payment)) {
							echo "<h3>Payment field is empty</h3>";
				        exit();
				    }
						elseif (mysqli_num_rows($results) === 1)
					    {
								echo "<h3>You are already registered</h3>";

							} else {
					        echo "<h3>You are now registered</h3>";
									$stmt->execute();
									if ($place=='Lalibela') {
										if ($payment=='<3') {
											echo '<h2>Send the required money to CBE: 10002222121212</h2><br> <h2>Total cost is 6000birr</h2> ';
										}elseif ($payment=='4-7') {
											echo '<h2>Send the required money to CBE: 10002222121212</h2><br> <h2>Total cost is 5000birr</h2> ';
									}elseif ($payment=='morethan-7') {
											echo '<h2>Send the required money to CBE: 10002222121212</h2><br> <h2>Total cost is 4000birr</h2> ';
									}else {
											echo ' <h3>choose proper paymetnt option</h3> ';
									}
								}elseif ($place=='Aksum') {
											if ($payment=='<3') {
												echo '<h2>Send the required money to CBE: 10002222121212</h2><br> <h2>Total cost is 8000birr</h2> ';
											}elseif ($payment=='4-7') {
												echo '<h2>Send the required money to CBE: 10002222121212</h2><br> <h2>Total cost is 7500birr</h2> ';
										}elseif ($payment=='morethan-7') {
												echo '<h2>Send the required money to CBE: 10002222121212</h2><br> <h2>Total cost is 7000birr</h2> ';
										}else {
												echo ' <h3>choose proper paymetnt option</h3> ';
								}
					    }elseif ($place=='Hiking') {
										if ($payment=='<3') {
											echo '  <h2>Send the required money to CBE: 10002222121212</h2><br> <h2>Total cost is 3000birr</h2> ';
										}elseif ($payment=='4-7') {
											echo '<h2>Send the required money to CBE: 10002222121212</h2><br> <h2>Total cost is 2500birr</h2> ';
									}elseif ($payment=='morethan-7') {
											echo '<h2>Send the required money to CBE: 10002222121212</h2><br> <h2>Total cost is 2000birr</h2> ';
									}else {
											echo ' <h3>choose proper paymetnt option</h3> ';
							}
						}elseif ($place=='Semen Mountain') {
										if ($payment=='<3') {
											echo '<h2>Send the required money to CBE: 10002222121212</h2><br> <h2>Total cost is 6000birr</h2> ';
										}elseif ($payment=='4-7') {
											echo '<h2>Send the required money to CBE: 10002222121212</h2><br> <h2>Total cost is 4000birr</h2> ';
									}elseif ($payment=='morethan-7') {
											echo '<h2>Send the required money to CBE: 10002222121212</h2><br> <h2>Total cost is 3400birr</h2> ';
									}else {
											echo ' <h3>choose proper paymetnt option</h3> ';
							}
						}elseif ($place=='Unity Park') {
										if ($payment=='<3') {
											echo '<h2>Send the required money to CBE: 10002222121212</h2><br> <h2>Total cost is 1000birr</h2> ';
										}elseif ($payment=='4-7') {
											echo '<h2>Send the required money to CBE: 10002222121212</h2><br> <h2>Total cost is 600birr</h2> ';
									}elseif ($payment=='morethan-7') {
											echo '<h2>Send the required money to CBE: 10002222121212</h2><br> <h2>Total cost is 400birr</h2> ';
									}else {
											echo ' <h3>choose proper paymetnt option</h3> ';
							}
						}elseif ($place=='Friendship Square') {
										if ($payment=='<3') {
											echo '<h2>Send the required money to CBE: 10002222121212</h2><br> <h2>Total cost is 500birr</h2> ';
										}elseif ($payment=='4-7') {
											echo '<h2>Send the required money to CBE: 10002222121212</h2><br> <h2>Total cost is 400birr</h2> ';
									}elseif ($payment=='morethan-7') {
											echo '<h2>Send the required money to CBE: 10002222121212</h2><br> <h2>Total cost is 300birr</h2> ';
									}else {
											echo ' <h3>choose proper paymetnt option</h3> ';
										}
									}else {
									    echo ' <h3>choose proper place option</h3> ';
									}

							}
						}else {
						echo "<h3 class='errors'>fill all</h3>";
						}



					$conn->close();
					?>
				</div>
				</div>
		</div>
	</body>

</html>
