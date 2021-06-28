<?php
$con = mysqli_connect("localhost","root","","showmore");
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>