<?php
if (isset($_POST['signup-submit'])) {
require 'connection.php';



  $fname1 = $_POST['fname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $passwordRepeat = $_POST['password_c'];

      if (empty(  $fname1) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("Location: signup.php?error=emptyfields");
     exit();
      }
      else{
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          header("Location: signup.php?error=invalidemail");
        }
        else{
        $sql ="SELECT fullname FROM signup WHERE fullname =?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql) ) {
          header("Location: signup.php?error=sqlerror");
          exit();
        }
        else
        {
          mysqli_stmt_bind_param($stmt, "s",   $fname1);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_store_result($stmt);
          $resultCheck=mysqli_stmt_num_rows($stmt);
          $sql = "SELECT * FROM signup WHERE emailUsers='$email'";
    $res = mysqli_query($conn, $sql);
          if ($resultCheck > 0) {
            header("Location: signup.php?error=usertaken");
            exit();
          }
          elseif(mysqli_num_rows($res) > 0){
            header("Location: signup.php?error=emailtaken");
            exit();
          }
          else
          {
            $sql="INSERT INTO signup (fullname, emailUsers, pwdUsers, admin) VALUES(?, ?, ?, 'No')";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql) ) {
              header("Location: signup.php?error=sqlerror");
              exit();
            }
            elseif ($password !== $passwordRepeat) {
              header("Location: signup.php?error=passcheck");
              exit();
            }
            else{
              $hashedpwd=password_hash($password, PASSWORD_DEFAULT);
              mysqli_stmt_bind_param($stmt, "sss",   $fname1 , $email, $password);
              mysqli_stmt_execute($stmt);
              header("Location: signup.php?signup=success");
              // $adminsId="INSERT INTO `signup`( `admin`) VALUES ('No')";
              // mysqli_query($conn, $adminsId);
              exit();
            }
      }

          }
        }
      }
      mysqli_stmt_close($stmt);
      mysqli_close($conn);
  }else {
    header("Location: signup.php");
    exit();
  }
