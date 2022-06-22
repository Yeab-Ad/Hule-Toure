<?php


//  ----------- checks if the user is loged in-----//

function check_login($conn){
      // check if the session value is set or exist//
    if(isset($_SESSION['email']))
    {
      $em= $_SESSION['email'];
        
      // read from database//
      $query= "select * from signupp where email = '$em' limit 1";

      $result = mysqli_query($conn,$query);

      if($result && mysqli_num_rows  ($result) > 0 )
      {
            $data = mysqli_fetch_assoc($result);
            return $data;
      }

    }
    // redirect to login//
    header("Location : login.php");
    die;
	 
} 