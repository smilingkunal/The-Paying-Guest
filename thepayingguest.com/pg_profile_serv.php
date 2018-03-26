<?php 
	session_start();
	include_once('connect.php');
	if(isset($_REQUEST["sub"])){
		$pg_name = $_REQUEST["pg_name"];
		$city = $_REQUEST["city"];
		$contact_person = $_REQUEST["contact_person"];
		$contact_no = $_REQUEST["contact_no"];
		$email = $_REQUEST['email'];
		$address = $_REQUEST["address"];
		$rooms = $_REQUEST["rooms"];
		$type = $_REQUEST["type"];
		$rent = $_REQUEST["rent"];
		$pg_type = $_REQUEST["pg_type"];
		$destination = '';
		
		if(isset($_FILES["pg_picture"]["name"]) && ($_FILES['pg_picture']['type']=='image/jpeg' || $_FILES['pg_picture']['type']=='image/png')){
			$pg_picture_name = $_FILES["pg_picture"]["name"];
			$pg_picture_size = $_FILES['pg_picture']['size'] / 1024;
			$pg_picture_type = $_FILES['pg_picture']['type'];
			$pg_picture_tmp_loc = $_FILES['pg_picture']['tmp_name']; 
			$destination = 'uploads/'.$pg_picture_name;
			move_uploaded_file($pg_picture_tmp_loc, $destination);
			echo "<img src='$destination' height='100' width='100'>";
		}

			
			$query = "insert into pgowner_profile(pg_name,city,contact_person,contact_no,email,address,rooms,type,rent,pg_picture,status,verified,pg_type) values('$pg_name','$city','$contact_person','$contact_no','$email','$address','$rooms','$type','$rent','$destination',1,1,'$pg_type')";
			$result = mysqli_query($con,$query);
			if($result){
				if(mysqli_affected_rows($con) == 1){
					header('Location:success.php');
				}else{
					echo "You are already registered with us...";
				}
			}else{
				echo mysqli_error($con);
			}
		
	}else{
		echo "No Testing Please!!!";
	}
?>