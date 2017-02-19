<?php
// include configuration file
include 'config/core.php';
 
// include the head template
include_once "layout_head.php";?>

<form action="api/read_all_orders.php" id="new_order" method="post">
<input type="submit" value="submit">
</form>        

<script type="text/javascript" charset="utf-8">
    var name = null;
    function waitForMsg(){
$.ajax({
type: "GET",
url: "api/read_all_orders.php",
async: true,
cache: false,
success: function(data){
var json=eval('('+data+ ')');
if (json['name'] !="") {
//alert( json['msg'] );
//Display message here
$("#msgold").empty();
$("#msgold").append(json['name'] +"<hr>").slideDown("slow");
}

name =json["name"];
setTimeout("waitForMsg()",1000);
},
error: function(XMLHttpRequest,textStatus,errorThrown) {
// alert("error: "+textStatus + " "+ errorThrown );
setTimeout("waitForMsg()",15000);
}
});
}
$(document).ready(
function()
{
waitForMsg();
}); 
</script>


<H3> Server Results </H3>
<hr />
<div id="messages"><div id="msgold"></div></div>

<?php

// page footer
include_once "layout_foot.php";
?>