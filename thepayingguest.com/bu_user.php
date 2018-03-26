<?php 	
	include_once('connect.php');
	$email = $_GET["email"];
	$status = $_GET["status"];
	$query = "update `users` set status = $status where email='$email'";
	$result = mysqli_query($con,$query);
	if($result){
		echo "Status Updated!!";
	}
	else{
		echo "Error";
	}
 ?>