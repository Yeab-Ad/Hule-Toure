<?php
$servername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="huletour2";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
  die ("connection failed:".mysqli_conncet_error());
}
