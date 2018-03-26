<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>register</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
	.class1
      {
        float: right;
        margin-bottom: 130px;
        /* margin-right: 100px; */
        margin-top: 70px;
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
<body>
	<div class="container class1">
    <div class="row">
      	<div class="col-md-8 well" style="padding: 50px;">
       		<h1 class="txt2" style="margin-left:140px; font-size:3.5em">Register Yourself</h1><br>
        <form class="form-horizontal" action="register_serv.php" method="post">
          <div class="form-group">
            <label for="name" class="col-sm-3 control-label txt1">Name :</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" pattern="[A-Za-z ]{3,20}" title="Use alphabets only">
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-3 control-label txt1">Email :</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" pattern="[a-z0-9._%+-]{1,20}+@[a-z0-9.-]{1,20}+\.[a-z]{2,3}$" title="Enter a valid email">
            </div>
          </div>
          <div class="form-group">
            <label for="contact_no" class="col-sm-3 control-label txt1">Contact Number :</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="contact_no" id="contact_no" placeholder="Enter Contact Number" pattern="[0-9]{10}" title="Use numeric values only">
            </div>
          </div>
          <div class="form-group">
            <label for="pass" class="col-sm-3 control-label txt1">Password :</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter Password" pattern="[A-Za-z0-9!@#$%^&*()_]{6,20}" title="Enter a valid Password">
            </div>
          </div>
          <div class="form-group">
            <label for="type" class="col-sm-3 control-label txt1">Type :</label>
            <div class="col-sm-9">
             <input type="radio" value="User" name="type">User &nbsp;<input type="radio" value="Owner" name="type" checked>Owner
            </div>
          </div>
            <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <button type="submit" class="btn btn-success" name="reg" id="reg">
                <a style="text-decoration: none; color: white;">Register</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
</body>
</html>