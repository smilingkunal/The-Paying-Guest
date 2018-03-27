<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Secret Admin Panel </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button id="loadUsers" class="btn btn-lg btn-default">
               Load All Users
            </button>
                <button id="loadPGOwner" class="btn btn-lg btn-default">
               Load All PG Owner
            </button>


                <table class="table table-hover" id="dataTable"></table>

            </div>
        </div>
    </div>
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Confirmation</h4>
               </div>
               <div class="modal-body">
                  <table class="table table-hover" id="detailTable">
                     <tr>
                        <td>PG Name</td>
                        <td id="pgname"></td>
                     </tr>
                     <tr>
                        <td>Contact Name</td>
                        <td id="contactname"></td>
                     </tr>
                     <tr>
                        <td>Contact Number</td>
                        <td id="contactnumber"></td>
                     </tr>
                  </table>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
            </div>
        </div>
    </div>


    <script src="js/jquery.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript">
        var fullinfo;
               $(document).ready(function(){
               
                  $("#loadPGOwner").click(function(e){
                     var url = "fetch.php?jasos=1";
                     $.getJSON(url,function(data){
                        fullinfo = data;
                        $("#dataTable").empty();
                        $("#dataTable").append("<tr><th>PG Name</th><th>PG Owner</th><th>Email</th></tr>");
                        for(var i =0;i <data.length;i++){
        
        
                           var tr = $('<tr>'); //creating New Tr tag
        
                           tr.append("<td>"+data[i].pg_name);
                           tr.append("<td>"+data[i].contact_name);
                           tr.append("<td>"+data[i].email);
                           tr.append("<td><button class='btn btn-sm btn-success' onclick='ViewModal("+i+");'>View Details</button>");
        
        
                           $("#dataTable").append(tr);   //Appending TR tag to Table
                        }

                        // alert(data);

        
        
                     });   
                  });

                  $("#loadUsers").click(function(e){
                     var url = "fetch.php?jasos=2";
                     $.getJSON(url,function(data){
                        fullinfo = data;
                        $("#dataTable").empty();
                        $("#dataTable").append("<tr><th>Email</th><th>Name</th><th>Type</th><th>Status</th></tr>");
                        for(var i =0;i <data.length;i++){
                           var tr = $('<tr>'); //creating New Tr tag
        
                           tr.append("<td>"+data[i].email);
                           tr.append("<td>"+data[i].pg_name);
                           tr.append("<td>"+data[i].type);

                           // tr.append("<td>"+data[i].status);

                           var btns; 
                           if(data[i].status==1){  
                              btns = "<button class='btn btn-sm btn-danger' onclick='ChangeStatus("+i+",0);'>Block</button>";
                           }else{
                              btns = "<td><button class='btn btn-sm btn-success' onclick='ChangeStatus("+i+",1);'>Un-Block</button>";
                           }
                           tr.append(btns);
        
                           $("#dataTable").append(tr);   //Appending TR tag to Table
                        }

                        // alert(data);

        
        
                     });   
                  });
        
        
        
               });
        
               function ChangeStatus(i,status){
                     // alert(fullinfo[i].email +" Ka staus "+staus +" Karna Hai");
                  var url = "bu_user.php?email="+fullinfo[i].email+"&status="+status;
                  // alert(url);
                  $.get(url,function(data){
                     // alert(data);
                     $("#loadUsers").click();
                  });    
               }
        
        
              function ViewModal(loc){
                 var url = "opd_service.php?email="+fullinfo[loc].email;
                  alert(url);
                 // $.getJSON(url,function(data){
                   alert(data.length);

                 //    //alert(fullinfo[loc].pg_name) ;

                 //    $('#pgname').append(fullinfo[loc].pg_name);
                 //    $('#contactname').append(fullinfo[loc].contact_name);
                 //    $('#contactnumber').append(fullinfo[loc].contact_no);

                 //    $('#myModal').modal('show');


  
                 });
  
              }
    </script>
</body>

</html>