<?php

    include('connection.php');

    $email = $_POST['email'];
    $Password = $_POST['Password'];



session_start();


if (isset($_POST['email']) && isset($_POST['Password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['Password']);

    if (empty($email)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{
        $adminno='1';
        $sql = "SELECT * FROM signup WHERE emailUsers='$email' AND pwdUsers='$pass'";
        $adminUser = "SELECT admin FROM signup WHERE emailUsers='$email' AND admin='Yes' ";

        $result = mysqli_query($conn, $sql);
        $resultAdmin = mysqli_query($conn, $adminUser);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);
            $rowAdmin = mysqli_fetch_assoc($resultAdmin);

            if ($row['emailUsers'] === $email && $row['pwdUsers'] === $pass) {
               if ($rowAdmin['admin'] ==='Yes') {
                 echo "Logged in!";

                 $_SESSION['email'] = $row['emailUsers'];
                 session_start();
                 $_SESSION['userId'] =$row['idUsers'];
                 $_SESSION['userUid'] =$row['fullname'];
                 $_SESSION['admin'] =$rowAdmin['admin'];
                 header("Location: adminDashboard.php?login=success");
                 exit();

               }else {

                echo "Logged in!";

                $_SESSION['email'] = $row['emailUsers'];
                session_start();
                $_SESSION['userId'] =$row['idUsers'];
                $_SESSION['userUid'] =$row['fullname'];
                header("Location: dashboard.php?login=success");
                exit();
              }

            }else{

                header("Location: Login.php?error=Incorect User name or Password");

                exit();

            }

        }else{

            header("Location: Login.php?error=Incorect User name or Passwords");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}
