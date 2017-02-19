
function orderProcess() {
    
var data = $('#new_order').serialize();

// AJAX code to submit form.
$.ajax({
type: "POST",
url: "api/create_order.php",
data: data,
cache: false,
success: function(html) {
alert(html);
},
error: function() {
alert("Could not load data...");
}
});
}

    
function financeProcess() {
    
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "api/read_all_orders.php",
data: data,
cache: false,
success: function(html) {
alert(html);
},
error: function() {
alert("Could not load data...");
}
});
}