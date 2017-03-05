<?php
// include configuration file
include 'config/core.php';
 
// include the head template
include_once "layout_head.php";?>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">YoungMan</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#" onclick="showNewOrder()">New Orders</a></li>
      <li><a href="#" onclick="showActiveOrder()">Active Orders</a></li>
    </ul>
  </div>
</nav>


<input type="button" onclick="waitForMsg()" value="getresults">

<div id="NewOrders">

<H3> New Orders </H3>
<hr />
<div id="message1"></div>
</div>

<div id="ActiveOrders">

<H3> Active Orders </H3>
<hr />
<div id="message2"></div>
</div>



<script type="text/javascript" charset="utf-8">
    var name = null;
    function waitForMsg(){
$.ajax({
type: "GET",
url: "api/read_all_orders.php",
async: true,
cache: false,
dataType: "json",
success: function(data){

            var htmlText = '';

           for ( var key in data){
                htmlText += '<div class="div-container">';
                htmlText += '<p class="p-name"> Name: ' + data[key].name + '</p>';
                htmlText += '<p class="p-desc"> Description: ' + data[key].description + '</p>';
               htmlText += '<p class="p-desc"> Price: ' + data[key].price + '</p>';
                htmlText += '</div>';
           }
            $('#message1').replaceWith(htmlText);
    
            
setTimeout("waitForMsg()",1000);
},
error: function(XMLHttpRequest,textStatus,errorThrown) {
setTimeout("waitForMsg()",15000);
}
});
        
}

    function getNewOrder(){
        
        // get only those which have status pendinhg in financial_clearance
        $.ajax({
            type: "GET",
            url: "api/read_all_orders.php",
            async: true,
            cache: false,
            dataType: "json",
            success: function(data){

                        var htmlText = '';

                       for ( var key in data ){
                            htmlText += '<div class="div-container"><div class="panel-group"><div class="panel panel-info"><div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" href="#' + data[key].name + '"><b>' + data[key].name + '</b></a></h4</div>';
                            htmlText += '<div id="' + data[key].name + '" class="panel-collapse collapse panel-body ">';
                            htmlText += '<p class="p-name"> Name: ' + data[key].name + '</p>';
                            htmlText += '<p class="p-desc"> Description: ' + data[key].description + '</p>';
                           htmlText += '<p class="p-desc"> Price: ' + data[key].price + '</p>';
                           htmlText += '<p class="p-desc"> Category: ' + data[key].category + '</p>';
                           htmlText += '<p class="p-desc"> Type: ' + data[key].type + '</p>';
                           htmlText += '<p class="p-desc"> Start Date: ' + data[key].start_date + '</p>';
                           htmlText += '<p class="p-desc"> Expity Date: ' + data[key].expiry_date + '</p>';
                           htmlText += '<p class="p-desc"> Location: ' + data[key].job_order_location + '</p>';
                            htmlText += '<p> APPROVE</p><form class="form-horizontal" role="form" id="formfield"  method="POST" action="update_order.php" >';
                            htmlText += '<button type="submit" name="approve_btn" class="btn btn-success">Yes</button><button type="submit" name="reval_btn" class="btn btn-danger">No</button></form></div></div></div></div>';
                            
                       }

                        $('#message1').replaceWith(htmlText);


            setTimeout("getNewOrder()",1000);
            },
            error: function(XMLHttpRequest,textStatus,errorThrown) {
            setTimeout("getNewOrder()",15000);
            }
                    });
    }
    
    function getActiveOrder(){
        $.ajax({
            type: "GET",
            url: "api/read_all_orders.php",
            async: true,
            cache: false,
            dataType: "json",
            success: function(data){

                        var htmlText = '';

                       for ( var key in data){
                           
                            htmlText += '<div class="div-container"><div class="panel-group"><div class="panel panel-info"><div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" href="#active' + data[key].name + '"><b>' + data[key].name + '</b></a></h4</div>';
                            htmlText += '<div id="active' + data[key].name + '" class="panel-collapse collapse panel-body">';
                            htmlText += '<p class="p-name"> Name: ' + data[key].name + '</p>';
                            htmlText += '<p class="p-desc"> Description: ' + data[key].description + '</p>';
                            htmlText += '<p class="p-desc"> Price: ' + data[key].price + '</p>';
                           htmlText += '<p class="p-desc"> Category: ' + data[key].category + '</p>';
                           htmlText += '<p class="p-desc"> Type: ' + data[key].type + '</p>';
                           htmlText += '<p class="p-desc"> Start Date: ' + data[key].start_date + '</p>';
                           htmlText += '<p class="p-desc"> Expity Date: ' + data[key].expiry_date + '</p>';
                           htmlText += '<p class="p-desc"> Location: ' + data[key].job_order_location + '</p>';
                           
                           htmlText += '</div></div></div></div>';
                           
                       }
                        $('#message2').replaceWith(htmlText);


            setTimeout("getActiveOrder()",1000);
            },
            error: function(XMLHttpRequest,textStatus,errorThrown) {
            setTimeout("getActiveOrder()",15000);
            }
                    });
    }
    
    function showNewOrder(){
        //make new order div visible and make other div invisible and call getNew Order
        document.getElementById("NewOrders").style.display= "inline-block";
        document.getElementById("ActiveOrders").style.display= "none";
        getNewOrder();
        
    }
    
    function showActiveOrder(){
        document.getElementById("ActiveOrders").style.display= "inline-block";
        document.getElementById("NewOrders").style.display= "none";
        getActiveOrder();
    }
</script>

<?php

// page footer
include_once "layout_foot.php";
?>