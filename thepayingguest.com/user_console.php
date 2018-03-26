<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Console</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
  
  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      <h1>Search Panel</h1>
      <hr>
      <form action="">
       <!--  <button id="loadCities" type="button" class="btn btn-primary">Load Cities</button>
        --> 
        Select City : <select id="city" class="form-control" ></select>
      </form>
    </div>
  </div>
  
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
    
  <script  type="text/javascript" >
    $(document).ready(function(e){
      
      fetch_cities();

      function fetch_cities(){
        $.getJSON("fetch_cities.php",function(data){
          //console.log(data);
          $("#city").empty();
          for(var i = 0 ; i< data.length ; i++ ){
             $("#city").append("<option value='"+data[i].city+"'>"+data[i].city+"</option>");
          }
        });
      }

    });
  </script>  


</body>
</html>