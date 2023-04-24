<?php
$username=$_POST['uname'];
$email=$_POST['email'];
$phn=$_POST['phone'];
$add=$_POST['address'];
$pass=$_POST['password']; 


$con=mysqli_connect("localhost","root","","tour");
$r=mysqli_query($con,"insert into register_user (username,email,phone,address,password) values ('$username','$email','$phn','$add','$pass')");
if($r)
  header("location:userlogin.php");

    else
    echo mysqli_error($con);

?>