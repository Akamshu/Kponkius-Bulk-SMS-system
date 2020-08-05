<?php
$dbServername = 'localhost';
$dbUsername = 'root';
$dbpassword = '';
$dbname = 'shortmessage';

$conn = mysqli_connect($dbServername,$dbUsername, $dbpassword, $dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>