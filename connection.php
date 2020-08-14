<?php
$userserver = "localhost";
$username = "root";
$password = "";
$dbname = "akshansh";

$conn = mysqli_connect($userserver,$username,$password,$dbname);

 if($conn)
 {
	 echo "";
	 
	 
 }
 else
 {
	 die("connection failed because".myssql_connect_error());
 }

?>
