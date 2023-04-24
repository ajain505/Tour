<?php

$con=mysqli_connect("localhost","root","","tour");

$id=$_REQUEST["c"];
$r=mysqli_query($con,"SELECT `id`, `title`, `description`, `photo` FROM `restro` where id='$id' ");

echo "<table border='1' align='center' cellspacing='0' cellpadding='10' height='15%' width='50%'>";
echo"<tr>
     <th> id </th>
	 <th> title </th>
	 <th> description </th>
	 <th> photo </th>
	 </tr>";
     
     
	 while($row=mysqli_fetch_array($r))
	 {
        
		 echo"<tr>
		      <td>$row[0]</td>
			  <td>$row[1]</td>
			  <td>$row[2]</td>
			  <td><img src='upload/$row[3]' alt='No Image' 'width='10px' height='120px' align='center'></td>
			  
			  
			  </tr>";
	 }
echo "</table>";

?>