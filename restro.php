<?php
$title=$_POST['title'];
$des=$_POST['description'];

//Photo Uploading code Start
//1)Creating temp. file  2)MAin folder
$r=move_uploaded_file($_FILES["pho"]["tmp_name"], "upload/".$_FILES["pho"]["name"]);
$pname=$_FILES["pho"]["name"];
//End here

echo 'Title= ',$title;
echo '<br/> Description=',$des;

$con=mysqli_connect("localhost","root","","tour");
$r=mysqli_query($con,"insert into restro (title,description,photo) values ('$title','$des','$pname')");
if($r)
    echo '</br> Insert Successfully'; 
    else
    echo mysqli_error($con);
?>
