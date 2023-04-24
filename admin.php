<?php
$name=$_POST["us"];
$pass=$_POST["ps"];
$con=mysqli_connect("localhost","root","","tour");
$r=mysqli_query($con,"select * from admin_login where username='$name' and password='$pass'");
if($row=mysqli_fetch_array($r))
  header("location:option.html");
else
  echo"<h1>invalid username and password</h1>";
?>