<?php
$title=$_POST['title'];
$des=$_POST['description'];
$stay=$_POST['stay'];
$price=$_POST['price'];

//Photo Uploading code Start
//1)Creating temp. file  2)MAin folder
$r=move_uploaded_file($_FILES["pho"]["tmp_name"], "upload/".$_FILES["pho"]["name"]);
$pname=$_FILES["pho"]["name"];
//End here

echo 'Title= ',$title;
echo '<br/> Description=',$des;
echo '<br/> Stay= ',$stay;
echo '<br/> Price= ',$price;

$con=mysqli_connect("localhost","root","","tour");
$r=mysqli_query($con,"insert into packages (title,description,stay,price,photo) values ('$title','$des','$stay','$price','$pname')");
if($r)
    echo '</br> Insert Successfully'; 
    else
    echo mysqli_error($con);
?>
