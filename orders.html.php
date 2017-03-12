<?php
// include configuration file
include 'config/core.php';
 
// include the head template
include_once "layout_head.php";?>
<div class="container">
<form action="api/create_order.php" id="new_order" method="post" enctype="multipart/form-data">
    <div class="container" align="center">
    <div class="form-group row">
  <label for="customer_id" class="bmd-label-floating col-xs-2 col-form-label">Customer ID</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" name="customer_id" id="customer_id">
  </div>
</div>
<div class="form-group row">
  <label for="customer_name" class="col-xs-2 col-form-label">Customer NAME:</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" name="customer_name" id="customer_name">
  </div>
</div>
<div class="form-group row">
  <label for="price" class="col-xs-2 col-form-label">PRICE:</label>
  <div class="col-xs-10">
    <input class="form-control" type="number" name="price" id="price">
  </div>
</div>
<div class="form-group row">
  <label for="job_order_no" class="col-xs-2 col-form-label">JOB ORDER NO:</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" name="job_order_no" id="job_order_no">
  </div>
</div>
<div class="form-group row">
  <label for="job_order_location" class="col-xs-2 col-form-label">JOB ORDER LOCATION:</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" name="job_order_location" id="job_order_location">
  </div>
</div>
<div class="form-group row">
  <label for="description" class="col-xs-2 col-form-label">DESCRIPTION:</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" name="description" id="description">
  </div>
</div>
<div class="form-group row">
    <label for="category" class="col-xs-2 col-form-label">SELECT CATEGORY</label>
    <div class="col-xs-10">
     <select class="form-control" id="category" name="category" required>
      <option value="Prepaid">Prepaid</option>
      <option value="Postpaid">Postpaid</option>
     </select>
    </div>
</div>
<div class="form-group row">
    <label for="type" class="col-xs-2 col-form-label">SELECT TYPE</label>
    <div class="col-xs-10">
     <select class="form-control" id="type" name="type" required>
      <option value="" selected disabled>Please select</option>
      <option value="Sales">Sales</option>
      <option value="Rental">Rental</option>
     </select>
    </div>
</div>
<div class="form-group row">
  <label for="start_date" class="col-xs-2 col-form-label">START DATE:</label>
  <div class="col-xs-10">
    <input class="form-control" type="date" name="start_date" id="start_date">
  </div>
</div>
<div class="form-group row">
  <label for="expiry_date" class="col-xs-2 col-form-label">END DATE:</label>
  <div class="col-xs-10">
    <input class="form-control" type="date" name="expiry_date" id="expiry_date">
  </div>
</div>
</div>
    
    
    <label>Upload Work Order<input id="work_order" type="file" name="work_order" /></label>
    
     <label>Upload security_letter<input id="security_letter" type="file" name="work_order" /></label>
    
     <label>Upload rental_payment<input id="rental_payment" type="file" name="work_order" /></label>
    
     <label>Upload security_negotiable<input id="security_negotiable" type="file" name="work_order" /></label>
    
    
    <!--<input type="submit" value="submit">-->
    <button type="submit" name="submit" class="btn btn-primary btn-raised">Submit</button>
    
    <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
</form>        
    </div>





<?php

// page footer
include_once "layout_foot.php";
?>