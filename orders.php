<?php
// include configuration file
include 'config/core.php';
 
// include the head template
include_once "layout_head.php";?>
<div class="container">
<form onsubmit="orderProcess()" id="new_order" method="post">
    <div class="container" align="center">
    <div class="input-group">
        <span class="input-group-addon">Customer ID:</span>
        <input type="text" name="customer_id" id="customer_id">
    </div>
          <div class="input-group">
        <span class="input-group-addon">Customer NAME:</span>
        <input type="text" name="customer_name" id="customer_name">
    </div>
         <div class="input-group">
        <span class="input-group-addon">PRICE:</span>
        <input type="number" name="price" id="price">
    </div>
        <div class="input-group">
        <span class="input-group-addon">JOB ORDER NO:</span>
        <input type="text" name="job_order_no" id="job_order_no">
    </div>
        <div class="input-group">
        <span class="input-group-addon">JOB ORDER LOCATION:</span>
        <input type="text" name="job_order_location" id="job_order_location">
    </div>
        <div class="input-group">
        <span class="input-group-addon">DESCRIPTION:</span>
        <input type="text" name="description" id="description">
    </div>
<div>
<div class="input-group col-xs-4">
 <span class="input-group-addon">SELECT CATEGORY</span>
  <select class="form-control" id="category" name="category" required>
      <option value="" selected disabled>Please select</option>
    <option value="Prepaid">Prepaid</option>
    <option value="Postpaid">Postpaid</option>
  </select>
</div>
    
    <div class="input-group col-xs-4">
  <span class="input-group-addon">SELECT TYPE</span>
  <select class="form-control" id="type" name="type" required>
      <option value="" selected disabled>Please select</option>
    <option value="Sales">Sales</option>
    <option value="Rental">Rental</option>
  </select>
</div>
    
    <div class="input-group">
        <span class="input-group-addon">START DATE:</span>
        <input type="date" name="start_date" id="start_date">
    </div>
    
    <div class="input-group">
        <span class="input-group-addon">END DATE:</span>
        <input type="date" name="expiry_date" id="expiry_date">
    </div>

  </div>
    </div>
    <input type="submit" value="submit">
</form>        
    </div>




<?php

// page footer
include_once "layout_foot.php";
?>