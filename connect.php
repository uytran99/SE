<?php
$con = mysqli_connect("localhost","database_username","password","database_name");
if (mysqli_connect_errno())
  {
  echo "Unable to connect to MySQL: " . mysqli_connect_error();
  }
?>