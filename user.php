<?php
$name=$_POST["user"];
$pass=$_POST["pass"];
$con=mysqli_connect("localhost","root","","tour");
$r=mysqli_query($con,"select * from register_user where username='$name' and password='$pass'");
if($row=mysqli_fetch_array($r))
  header("location:profile.php");
else
  echo"<h1>invalid username and password</h1>";
?>