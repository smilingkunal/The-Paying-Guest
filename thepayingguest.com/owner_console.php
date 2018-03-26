<?php 
  session_start();
  if(isset($_SESSION['email'])){
    header('Location:owner_console.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<title>Owner_Console</title>
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  	<style type="text/css">
      .background
        {
          background-image: url("g6.jpg");
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
      .imge
        {
        	width: 200px;
        	height: 200px;
        }
      .txt1
        {
          color: #3AB7D3;
          font-family: "calibri", Garamond, 'Comic Sans MS';
          line-height:1.5em; 
          line-height:1.5em;  
          font-size: 1.4em;      
        }
      #img1:hover,#img2:hover,#img3:hover
        {
      		box-shadow: 4px 4px grey;
      		transition: all ease .3s;
      		transform: scale(1.05,1.05);
      		opacity: 1;
        }	
    </style>
  </head>
  <body class="background">
    <nav class="navbar navbar-default navbar-fixed-top" style="opacity: 0.8;">
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
      </div>
    </nav>
    <div class="container well class1">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="col-md-12 contain">
            <a href="edit_profile.php" style="text-decoration: none;">
              <img class="img-circle img-responsive imge" style="margin-left:230px;" src="user-icon.png" id="img1">
              <div class="caption txt1" style="margin-left: 280px;">
                <p>Edit Profile</p>
              </div>
            </a>
          </div>
        	<div class="row">
            <div class="col-md-6">
              <a href="owner_gallery.php" style="text-decoration: none;">
                <img class="img-circle img-responsive imge" style="margin-left:70px;" src="photos-icon.png" id="img2">
                <div class="caption txt1" style="margin-left: 130px;">
                  <p>Gallery</p>
                </div>
          	  </a>
        	  </div>	
        	  <div class="col-md-6">
        	    <a href="logout.php" style="text-decoration: none;">
        	      <img class="img-circle img-responsive imge" style="margin-left: 90px;" src="logout.png" id="img3">
        	      <div class="caption txt1" style="margin-left: 160px;">
        	        <p>Logout</p>
        	      </div>
        	    </a>
        	  </div>
        	</div>					  					  	
      	</div>
    	</div>
  	</div>	
  	<script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
  </body>
</html>