<?php 	
	session_start();
	include_once('connect.php');
	if(isset($_REQUEST["login"]))
	{
	    if(isset($_REQUEST['email'],$_REQUEST['pass'])){
			$admin = array("email" => "admin","pass"=>"password");
			$email = $_REQUEST["email"];
			$pass =  $_REQUEST["pass"];
			if($email == $admin['email'] && $pass == $admin['pass']){
				$_SESSION['email'] = $email;
				header('Location:adminpanel.php');
			}
		}
		$email = $_REQUEST["email"];
		$pass = md5($_REQUEST["pass"]);

		$query = "select * from users where email='$email' and password='$pass'";
		$result = mysqli_query($con,$query);
		echo mysqli_num_rows($result);
			if($result){
				if(mysqli_num_rows($result) != 0){
					while($record  = mysqli_fetch_array($result)){
						if($record['status'] == 1){
							$_SESSION["email"] = $email;
							if($record["type"] == "Owner"){
								//echo "Owner Hai!!";
								header("Location:owner_console.php");
							}
							if($record["type"] == "User"){
								//echo "User hai!!!";
								header("Location:user_console.php");
							}
						}else{
							echo "YOU ARE BLOCKED BY ADMIN...";
							echo "Contact administrator for more details!!!";
						}
					}
				}else{
					echo "You are not registered with us...";
				}
			}else{
				echo mysqli_error($con);
			}
	}
	else{
		echo "NO FUCKS GIVEN...";
	}
 ?>