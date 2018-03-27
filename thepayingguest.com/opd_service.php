<?php 	
	include_once('connect.php');
	if(isset($_GET["email"])){
	
	$json = array();
	
	$email = $_GET["email"];

	$query = "select * from `pgowner_profile` where email='$email'";
	
	$result = mysqli_query($con,$query);
	
	if($result){
		if(mysqli_num_rows($result) != 0){

			while($record  = mysqli_fetch_array($result)){
				$json[] = $record;		
			}
		}
		echo json_encode($json);	
	}
	}
	else{
		echo "Error";
	}
 ?>