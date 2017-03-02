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
<div id="messages"></div>
</div>

<div id="ActiveOrders">

<H3> Active Orders </H3>
<hr />
<div id="messages"></div>
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
                htmlText += '<div class="div-conatiner">';
                htmlText += '<p class="p-name"> Name: ' + data[key].name + '</p>';
                htmlText += '<p class="p-desc"> Description: ' + data[key].description + '</p>';
                htmlText += '</div>';
           }

            $('#messages').replaceWith(htmlText);
    
            
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

                       for ( var key in data){
                            htmlText += '<div class="div-conatiner">';
                            htmlText += '<p class="p-name"> Name: ' + data[key].name + '</p>';
                            htmlText += '<p class="p-desc"> Description: ' + data[key].description + '</p>';
                            htmlText += '</div>';
                       }

                        $('#messages').replaceWith(htmlText);


            setTimeout("showNewOrder()",1000);
            },
            error: function(XMLHttpRequest,textStatus,errorThrown) {
            setTimeout("showNewOrder()",15000);
            }
                    });
    }
    
    function getActiveOrder(){
        
    }
    
    function showNewOrder(){
        //make new order div visible and make other div invisible and call getNew Order
    }
    
    function showActiveOrder(){
        
    }
</script>

<?php

// page footer
include_once "layout_foot.php";
?>