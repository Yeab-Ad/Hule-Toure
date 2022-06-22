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
  <li  class="active"><a style="width: 172px!important;" href="adminDashboard.php">Admin Dashboard</a></li>
  <li  style="position: relative;  top: 5rem;" class="login"><a href="Logout.php">Logout</a></li>';
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
      font-size:24px;'>You are loged in as Admin !</p>";
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
<?php
  if (isset($_SESSION['Usermessage'])):
 ?>
 <div class="alert alert-<?=$_SESSION['Usermsg_type']?>">

    <?php
    echo $_SESSION['Usermessage'];
    unset($_SESSION['Usermessage']);
     ?>
 </div>
<?php endif ?>
   <div class="tabelLayout">
     <h2>Edit or Delete Trip</h2>
     <div class="">

       <div class="limiter">
       <div class="container-table100">
       <div class="wrap-table100">
       <div class="table100 ver6 m-b-110">
       <table data-vertable="ver6">
       <thead>
       <tr class="row100 head">
       <th class="column100 column2" data-column="column2">Place</th>
       <th class="column100 column6" data-column="column4">Delete Trip</th>
       <th class="column100 column6" data-column="column6"></th>
       </tr>
       </thead>
       <tbody>
         <?php

         include "connection.php"; // Using database connection file here

         $records = mysqli_query($conn,"select * from adminbooking"); // fetch data from database

         while($data = mysqli_fetch_array($records))
         {
         ?>
           <tr class="row100">
             <td class="column100 column1" data-column="column1"><?php echo $data['place']; ?></td>
             <td class="column100 column5" data-column="column5">
               <button style="width: 47%!important;" class="button_red">
                 <a href="adminDashboard.php?delete=<?php echo $data['id']; ?>"> Delete</a>
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
  $del="DELETE FROM adminbooking WHERE id=$id";
  mysqli_query($conn,$del);

  $_SESSION['message']="Trip plan has been delete !";
  $_SESSION['msg_type']="danger";
  header("location:dashboard.php");
}


   ?>


<!-- end of edit and delere -->


     </div>
   </div><br><br><br><br>

</section>
</div>

<div class="new_section">

<form class="formAdmin" action="adminDashboard.php" method="post">
  <input type="text" name="addtrip" placeholder="add trip plans here">
  <button style="width: 11%!important;" class="button_red" type="submit" name="submit"> Add Plans</button>
</form>
<?php
if (isset($_POST['submit'])) {
  $addT = $_POST['addtrip'];
  if (empty(  $addT) ) {
    header("Location: adminDashboard.php?error=emptyfields");
 exit();
}else{
    $sql = "SELECT * FROM adminbooking WHERE place='$addT'";
$res = mysqli_query($conn, $sql);
$tripresult = mysqli_query( $conn,$sql);


$number_of_rows = mysqli_num_rows($tripresult);

    if ($number_of_rows > 0) {
      echo "<h3 style=' position: absolute;'>Destination already added</h3>";
      exit();
    }else
    {
      $addnew="INSERT INTO adminbooking (place) VALUES ('$addT')";
      mysqli_query($conn, $addnew);
      echo "<h3>Trip plan added</h3>";
        exit();
    }

}
}
?>


<!-- delete users -->
<br><br><br>
<h2>Registered Users</h2>
<div class="limiter">
<div class="container-table100">
<div class="wrap-table100">
<div class="table100 ver6 m-b-110">
<table data-vertable="ver6">
<thead>
<tr class="row100 head">
<th class="column100 column2" data-column="column2">Registered Login</th>
<th class="column100 column6" data-column="column4">Delete Users</th>
<th class="column100 column6" data-column="column6">Admin</th>
</tr>
</thead>
<tbody>
  <?php

  include "connection.php"; // Using database connection file here

  $records = mysqli_query($conn,"select * from signup"); // fetch data from database

  while($data = mysqli_fetch_array($records))
  {
  ?>
    <tr class="row100">
      <td class="column100 column1" data-column="column1"><?php echo $data['emailUsers']; ?></td>
      <td class="column100 column5" data-column="column5">
        <button style="width: 47%!important;" class="button_red">
          <a href="adminDashboard.php?deletes=<?php echo $data['idUsers']; ?>"> Delete</a>
        </button>
      </td>
      <td class="column100 column1" data-column="column1"><?php echo $data['admin']; ?></td>
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

</div>
<!-- delete user <code></code> -->


<?php


 if (isset($_GET['deletes'])){
  $id=$_GET['deletes'];
  $del="DELETE FROM signup WHERE idUsers=$id";
  mysqli_query($conn,$del);

  $_SESSION['Usermessage']="User has been delete !";
  $_SESSION['Usermsg_type']="danger";
  header("location:adminDashboard.php");
}


   ?>


<!-- end of  delete user -->

<?php mysqli_close($conn); // Close connection ?>
</main>
<footer>
</footer>
</body>
</html>
