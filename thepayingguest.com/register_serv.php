<?php 
	include_once('connect.php');
	if(isset($_REQUEST["reg"]))
	{
	$name = $_REQUEST["name"];	
	$email = $_REQUEST["email"];
	$contact_no = $_REQUEST["contact_no"];	
	$pass = md5($_REQUEST["pass"]);
	$type = $_REQUEST["type"];
	
	$query = "insert into users(name,email,contact_no,password,type,status) values('$name','$email','$contact_no','$pass','$type',1)";
	$result = mysqli_query($con,$query);
		if($result){
			if(mysqli_affected_rows($con) == 1){
				echo "You are registered successfully...";
				echo "<a href='login.php'>Login Now</a>";
			}else{
				echo "You are already registered with us...";
			}
		}else{
			echo mysqli_error($con);
		}
	}else{
		echo "NO TESTING PLEASE...";
	}
?>