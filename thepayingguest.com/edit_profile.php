<?php 
  session_start();
  if(isset($_SESSION["email"])){
    header('Location:owner_console.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<title>edit profile</title>
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <style type="text/css">
      .background
      {
        background-image: url("g2.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100vh;  
      }
      .class1
      {
        float: right;
        margin-bottom: 130px;
        margin-right: 100px;
        margin-top: 130px;
        padding: 35px 35px 35px 35px;  
        opacity: 0.9;
      }
      .txt1
      {
        color: #C37334;
        font-family: "calibri", Garamond, 'Comic Sans MS';
        line-height:1.5em; 
        line-height:1.5em;        
      }
      .txt2
      {
        color: #EF8532; 
        font-family: "calibri", Garamond, 'Comic Sans MS';
        line-height:1.4em; 
        letter-spacing:0.1em;
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
          <a class="navbar-brand txt2" href="owner_console.php">PG Owner</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right txt1">
            <li><a href="owner_gallery.php">Gallery</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container class1">
      <div class="row">
        <div class="col-md-8 well" style="padding: 50px;">
          <h1 class="txt2" style="margin-left:140px; font-size:3.5em">Edit Your Profile</h1><br>
          <form class="form-horizontal" action="pg_profile_serv.php" method="post" enctype="multipart/form-data">
            <div class="form-group" hidden="">
              <label for="pgid" class="col-sm-3 control-label txt1">PG ID :</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="pgid" id="pgid" placeholder="Enter PG ID">
              </div>
            </div>
            <div class="form-group">
              <label for="pg_name" class="col-sm-3 control-label txt1">PG Name :</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="pg_name" id="pg_name" placeholder="Enter Your PG Name" pattern="[A-Za-z ]{3,20}" title="Use alphabets only">
              </div>
            </div>
            <div class="form-group">
              <label for="city" class="col-sm-3 control-label txt1">City :</label>
              <div class="col-sm-9">
                <select class="form-control" name="city" id="city"></select>
              </div>
            </div>
            <div class="form-group">
              <label for="contact_person" class="col-sm-3 control-label txt1">Contact Person Name :</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="contact_person" id="contact_person" placeholder="Enter the name of person incharge" pattern="[A-Za-z ]{2,15}" title="Use alphabets only">
              </div>
            </div>
            <div class="form-group">
              <label for="conatact_no" class="col-sm-3 control-label txt1">Contact Number :</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="contact_no" id="contact_no" placeholder="Enter Your Contact Number" pattern="[0-9]{10}" title="Use numeric values only">
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-3 control-label txt1">Email :</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your Email Address" pattern="[a-z0-9._%+-]{1,20}+@[a-z0-9.-]{1,20}+\.[a-z]{2,3}$" title="Enter a valid email">
              </div>
            </div>
            <div class="form-group">
              <label for="address" class="col-sm-3 control-label txt1">Address :</label>
              <div class="col-sm-9">
                <textarea class="form-control" placeholder="Enter Your PG Address" name="address"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="rooms" class="col-sm-3 control-label txt1">Rooms :</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="rooms" id="rooms" placeholder="Enter Number of Rooms" pattern="[0-9 -]{1,3}" title="Use numeric values only">
              </div>
            </div>
            <div class="form-group">
              <label for="type" class="col-sm-3 control-label txt1">Type :</label>
              <div class="col-sm-9">
                <input type="radio" value="AC" name="type">AC &nbsp;<input type="radio" value="Non-AC" name="type" checked>Non-AC &nbsp;<input type="radio" value="Both" name="type" checked>Both
              </div>
            </div>
            <div class="form-group">
              <label for="type" class="col-sm-3 control-label txt1">PG Type :</label>
              <div class="col-sm-9">
                <input type="radio" value="Boys" name="pg_type">Boys &nbsp;<input type="radio" value="Girls" name="pg_type" checked>Girls &nbsp;<input type="radio" value="Both" name="pg_type" checked>Both
              </div>
            </div>
            
            <div class="form-group">
              <label for="rent" class="col-sm-3 control-label txt1">Rent :</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="rent" id="rent" placeholder="Enter Rent" pattern="[0-9 -]{2,15}" title="Use numeric values only">
              </div>
            </div>
            <div class="form-group">
              <label for="pg_name" class="col-sm-3 control-label txt1">Upload Picture :</label>
              <div class="col-sm-9">
                 <div class="row">
                  <div class="col-md-4">
                    <input type="file" name="pg_picture" id="pg_picture" style="width:90px;">
                  </div>
                  <div class="col-md-6">
                    <img id="pic" src="gbg.png" width="200px" height="180px">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-success" name="sub" id="sub">
                  <a style="text-decoration: none; color: white;">Update</a>
                </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-danger">
                  <a style="text-decoration: none; color: white;">Cancel</a>
                </button>
              </div>
            </div>
            </div>
          </form>
        </div>
      </div> 
    </div>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        city();
        function city(){
          var city = ['Bathinda','Mohali','Chandiagarh','Amritsar'];
          var curCity = "Mohali";  
          for (var i=0;i<city.length;i++){
            $("#city").append("<option value='"+city[i]+"'>"+city[i]+"</option>");
            if(curCity == city[i]){
              $("#city option[value = '"+city[i]+"']").attr("selected","selected");
            }
          }  
        } 
      });
    </script>
    <script type="text/javascript">
      document.getElementById("pg_picture").addEventListener("change", function(){
        changeImage(this,'pic');
      });
      function changeImage(input,id){
        var reader;
        if (input.files && input.files[0]) {
          reader = new FileReader();
          reader.onload = function(e) {
            document.getElementById(id).setAttribute('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>
    <!-- <script type="text/javascript">
      alert('hi');
      function validatePg_name(){
        var pg_name = document.getElementById('pg_name').value; 
        var spnPg_name = document.getElementById('spnPg_name');
        var blank = true;
        if(pg_name != ""){
          blank = false;
          var pattern = /^[a-zA-Z]+$/;
          if(pattern.test(pg_name)){
            spnPg_name.innerHTML ="Valid";
          }
          else{
            spnPg_name.innerHTML ="Not Valid";
          }
        }
        else{
          blank = true;
        }
      }
    </script> -->
  </body>  
</html>