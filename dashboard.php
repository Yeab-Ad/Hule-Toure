<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>DreamTour</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" type="image/png" href="img/logo.png">

<link rel="stylesheet" type="text/css" href="./Table V03_files/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="./Table V03_files/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="./Table V03_files/animate.css">

<link rel="stylesheet" type="text/css" href="./Table V03_files/select2.min.css">

<link rel="stylesheet" type="text/css" href="./Table V03_files/perfect-scrollbar.css">

<link rel="stylesheet" type="text/css" href="./Table V03_files/util.css">
<link rel="stylesheet" type="text/css" href="./Table V03_files/main.css">

</head>
<body  style="background: #000000a3;">
  <!-- header bar start -->
<header id="header">
	<div class="center">
		<h1 class="logo"></h1>
		<nav class="link">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="tour.php">Tours</a></li>
				<li ><a href="gallery.php">Gallery</a></li>
				<li><a href="about.php">About</a></li>
				<?php
	if (isset($_SESSION['userId'])) {
		echo '
  <li class="active"><a href="dashboard.php">Dashboard</a></li>
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
<main>
  <div class="wrapper-main">
<section class="section-default">
  <?php
    if (isset($_SESSION['userId'])) {
      echo "<p style='position:relative;
      top:7rem;
      color:white;
      font-size:24px;'>You are loged in !</p>";
    }else {
    echo "<p style='position:relative;
    top:7rem;
    color:red;
    font-size:24px;>You are loged out !</p>";
    }
   ?>
<?php
  if (isset($_SESSION['message'])):
 ?>
 <div class="alert alert-<?=$_SESSION['msg_type']?>">

    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
     ?>
 </div>
<?php endif ?>
   <div class="tabelLayout">
     <h2>Booked Trip</h2>
     <div class="">

       <div class="limiter">
       <div class="container-table100">
       <div class="wrap-table100">
       <div class="table100 ver6 m-b-110">
       <table data-vertable="ver6">
       <thead>
       <tr class="row100 head">
       <th class="column100 column2" data-column="column2">Place</th>
       <th class="column100 column3" data-column="column3">Reservation</th>
       <th class="column100 column4" data-column="column4">Transportation</th>
       <th class="column100 column5" data-column="column5">Travel Guider</th>
       <th class="column100 column6" data-column="column6">No of Traveler Range</th>
       <th class="column100 column6" data-column="column6">Delete Trip</th>
       <th class="column100 column6" data-column="column6"></th>
       </tr>
       </thead>
       <tbody>
         <?php

         include "connection.php"; // Using database connection file here

         $records = mysqli_query($conn,"select * from booking"); // fetch data from database

         while($data = mysqli_fetch_array($records))
         {
         ?>
           <tr class="row100">
             <td class="column100 column1" data-column="column1"><?php echo $data['place']; ?></td>
             <td class="column100 column2" data-column="column2"><?php echo $data['Reservation']; ?></td>
             <td class="column100 column3" data-column="column3"><?php echo $data['transport']; ?></td>
             <td class="column100 column4" data-column="column4"><?php echo $data['tg']; ?></td>
             <td class="column100 column5" data-column="column5"><?php echo $data['payment']; ?></td>
             <td class="column100 column5" data-column="column5">
               <button class="button_red">
                 <a href="dashboard.php?delete=<?php echo $data['id']; ?>"> Delete</a>
               </button>
             </td>
           </tr>
         <?php
			 }
         ?>
       </tbody>
       </table>
       </div>
       </div>
       </div>
       </div>

       <script src="./Table V03_files/jquery-3.2.1.min.js.download"></script>

       <script src="./Table V03_files/popper.js.download"></script>
       <script src="./Table V03_files/bootstrap.min.js.download"></script>

       <script src="./Table V03_files/select2.min.js.download"></script>

       <script src="./Table V03_files/main.js.download"></script>

       <script async="" src="./Table V03_files/js"></script>

<!-- edit and delete php <code></code> -->


<?php


 if (isset($_GET['delete'])){
  $id=$_GET['delete'];
  $del="DELETE FROM booking WHERE id=$id";
  mysqli_query($conn,$del);

  $_SESSION['message']="Trip plan has been delete !";
  $_SESSION['msg_type']="danger";
  header("location:dashboard.php");
}


   ?>


<!-- end of edit and delere -->
<?php mysqli_close($conn); // Close connection ?>

     </div>
   </div><br><br><br><br>
<div class="addplans">
  Add new Trip Plans :
  <button class="button_booknow">
    <a href="booking.php">BookNow</a>
  </button>

</div>
<div style="    position: relative;
    top: -3rem;
    color: black;">
  <p style="color: white;">NOTIC : In order to get vertified through Email transfer The required fee</p>
</div>
</section>
</div>
</main>
<footer>
</footer>
</body>
</html>
