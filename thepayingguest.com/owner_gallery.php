<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>gallery</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<style type="text/css">
			.background
		    {
			    background-image: url("pg_profile_bg.jpg");
			    background-repeat: no-repeat;
			    background-attachment: fixed;
			    background-size: 100% 100vh;  
		    }
		    .class1
		    {
		    	background: white;
		    	float: right;
		    	margin-bottom: 130px;
		    	margin-right: 100px;
		    	margin-top: 130px;
		    	padding: 35px 35px 35px 35px;  
		    	opacity: 0.9;
		    }
		    .imgcontainer 
		    {
		    	position: relative;
		    	width: 100%;
		    	height: 235px;
			}
			.image 
			{
				opacity: 1;
				display: block;
				width: 100%;
				height: 235px;
				transition: .5s ease;
				backface-visibility: hidden;
			}
			.middle 
			{
				transition: .5s ease;
				opacity: 0;
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				-ms-transform: translate(-50%, -50%);
				text-align: center;
			}

			.imgcontainer:hover .image 
			{
				opacity: 0.3;
			}

			.imgcontainer:hover .middle 
			{
				opacity: 1;
			}

			.text 
			{
				color: white;
				font-size: 16px;
				padding: 16px 32px;
			}
		</style>
	</head>
	<body class="background">
		<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" style="opacity: 0.8;">
		    <div class="container">
		    	<div class="navbar-header">
			        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
			        </button>
		        	<a class="navbar-brand txt2" href="owner_console.php">
		        		PG Owner
		        	</a>
		      	</div>
		    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			        <ul class="nav navbar-nav navbar-right txt1">
			          <li><a href="edit_profile.php">Edit Profile</a></li>
			          <li><a href="logout.php">Logout</a></li>
			        </ul>
		    	</div>
		    </div>
	  	</nav>
	  	<div class="container class1">
			<div class="row">
			    <div class="col-md-4">
			    	<div class="thumbnail">
				    	<div class="imgcontainer">
					      	<img src="gbg.png" alt="pg_1" id="pic1" class="image" style="width:100% height:235px;">
							<div class="middle">
								<div class="text">
							    	<input type="file" name="img1" id="img1" style="width: 105px">
							    </div>
							</div>
				      </div>
				    </div>  
			    </div>
			    <div class="col-md-4">
			    	<div class="thumbnail">
				    	<div class="imgcontainer">
					      	<img src="gbg.png" alt="pg_2" id="pic2" class="image" style="width:100% height:235px;">
							<div class="middle">
								<div class="text">
							    	<input type="file" name="img2" id="img2" style="width: 105px">
							    </div>
							</div>    
						</div>
					</div>	
			    </div>
			    <div class="col-md-4">
				    <div class="thumbnail">
					    <div class="imgcontainer">
						    <img src="gbg.png" alt="pg_3" id="pic3" class="image" style="width:100% height:235px;">
							<div class="middle">
								<div class="text">
									<input type="file" name="img3" id="img3" style="width: 105px">
								</div>
							</div>
					    </div>
				    </div>
			    </div>  
			    <div class="col-md-4">
					<div class="thumbnail">
					    <div class="imgcontainer">
							<img src="gbg.png" alt="pg_4" id="pic4" class="image" style="width:100 height:235px;">
							<div class="middle">
								<div class="text">
									<input type="file" name="img4" id="img4" style="width: 105px">
								</div>
							</div>	
						</div>
				    </div>
			    </div>
			    <div class="col-md-4">
				    <div class="thumbnail">	
					    <div class="imgcontainer">
							<img src="gbg.png" alt="pg_5" id="pic5" class="image" style="width:100% height:235px;">
							<div class="middle">
								<div class="text">
									<input type="file" name="img5" id="img5" style="width: 105px">
								</div>
							</div>
					    </div>
				    </div>
			    </div>
			    <div class="col-md-4">
				    <div class="thumbnail">	
					    <div class="imgcontainer">
							<img src="gbg.png" alt="pg_6" id="pic6" class="image" style="width:100% height:235px;">
							<div class="middle">
								<div class="text">
									<input type="file" name="img6" id="img6" style="width: 105px">
								</div>
							</div>	
						</div>
				    </div>
			    </div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
	    <script type="text/javascript" src="js/bootstrap.js"></script>
	    <script type="text/javascript">
		    document.getElementById("img1").addEventListener("change", function(){
		      changeImage(this,'pic1'); });
		    document.getElementById("img2").addEventListener("change", function() {
		      changeImage(this,'pic2'); });
		    document.getElementById("img3").addEventListener("change", function() {
		      changeImage(this,'pic3'); });
		    document.getElementById("img4").addEventListener("change", function() {
		      changeImage(this,'pic4'); });
		    document.getElementById("img5").addEventListener("change", function() {
		      changeImage(this,'pic5'); });
		    document.getElementById("img6").addEventListener("change", function() {
		      changeImage(this,'pic6'); });
		    function changeImage(input,id){
			    var reader;
			    if (input.files && input.files[0]){
				    reader = new FileReader();
				    reader.onload = function(e){
				    	document.getElementById(id).setAttribute('src', e.target.result);
				    }
					reader.readAsDataURL(input.files[0]);
			    }
		    }
	  	</script>
	</body>
</html>