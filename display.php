<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM student";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


if($total != 0)
{
	?>
	<table>
	   <tr>
	      <th>Name</th>
	      <th>Email Id</th>
	      <th>Mobile no</th>
	      <th>Date Of Birth</th>
	      <th>Pin Code</th>
	   </tr>
    
	
	
	<?php
	
	while($result = mysqli_fetch_assoc($data))
	{
	      echo " <tr>
	                 <td>".$result['Name']."</td>
	                 <td>".$result['Email Id']."</td>
	                 <td>".$result['Mobile no']."</td>
	                 <td>".$result['Date Of Birth']."</td>
	                 <td>".$result['Pin Code']."</td>
	            </tr>";
	}
}
else
{
	echo "No Records";
}

?>
</table>