<?php 
  session_start();
  if(isset($_SESSION['sub'])){
    header('Location:owner_console.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>success</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		.class1
      {
        float: right;
        margin-bottom: 130px;
        margin-right: 100px;
        margin-top: 70px;
        padding: 35px 35px 35px 35px;  
        opacity: 0.9;
      }
	</style>
</head>
<body>
	<div class="container class1">
  <div class="jumbotron">
    <h1>Success</h1>      
    <p>Your profile is updated successfully.</p>
    <button type="button" class="btn btn-danger">
        <a href="owner_console.php" style="text-decoration: none; color: white;">Close</a>
    </button>
  </div>     
</div>
<script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>