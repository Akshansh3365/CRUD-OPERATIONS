<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
</head>
<body>

<form action="" method="GET">
Name <input type="text" name="Studentname" value=""/><br><br>
Email Id <input type="text" name="studentEmailId" value=""/><br><br>
Mobile no <input type="text" name="StudentMobileno" value=""/><br><br>
Date Of Birth <input type="text" name="StudentDateOfBirth" value=""/><br><br>
Pin Code <input type="text" name="PinCode" value=""/><br><br>
<input type="submit" name="submit" value="submit"/>

</form>
<?php

$nm = $_GET['Studentname'];
$em = $_GET['studentEmailId'];
$mn = $_GET['StudentMobileno'];
$Dob =$_GET['StudentDateOfBirth'];
$Pc = $_GET['PinCode'];

$query ="INSERT INTO student VALUES ('$nm','$em','$mn','$Dob','$Pc')";
$data = mysqli_query($conn, $query);



if($Data)
{
    echo "Data inserted into Database"; 
}


	 
 
?>
	
	
    </body>
</html>


	
