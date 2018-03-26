<?php 	
	include_once('connect.php');
	$json = array();
	$query = "select distinct `city` from `pgowner_profile`";
	$result = mysqli_query($con,$query);
	if($result){
		if(mysqli_num_rows($result) != 0){

			while($record  = mysqli_fetch_array($result)){
				$json[] = $record;		
			}
		}
		echo json_encode($json);	
	}
	
 ?>