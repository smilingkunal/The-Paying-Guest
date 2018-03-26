<?php 	
	include_once('connect.php');
	if(isset($_GET["jasos"])){
	$json = array();
	if($_GET["jasos"]==1){
		$query = "select * from `pgowner_profile`";
	}
	if($_GET["jasos"]==2){
		$query = "select * from `users`";
	}
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