<?php

if($_POST){
    
     // include core configuration
    include_once '../config/core.php';
 
    // include database connection
    include_once '../config/database.php';
 
    // order object
    include_once '../objects/order.php';
 
    // class instance
    $database = new Database();
    $db = $database->getConnection();
    $order = new Order($db);
 
     // set order property values
    $order->name = $_POST['customer_name'];
    $order->price = $_POST['price'];
    $order->category = $_POST['category'];
    $order->description = $_POST['description'];
    $order->type = $_POST['type'];
   // $order->orders = $_POST['orders'];
    //$order->work_order = addslashes (file_get_contents($_FILES['workorder']['tmp_name']));
    $order->start_date = $_POST['start_date'];
    $order->expiry_date = $_POST['expiry_date'];
    $order->customer_id = $_POST['customer_id'];
    $order->job_order_no = $_POST['job_order_no'];
    $order->job_order_location = $_POST['job_order_location'];
    
    $order->workordername = $_FILES["image"]["name"];
    $order->work_order = file_get_contents($_FILES["image"]["tmp_name"]);
    $order->imageType = $_FILES["image"]["type"];

    
/*    $order->work_order = $_POST['work_order'];
    $order->security_letter = $_POST['security_letter'];
    $order->rental_payment = $_POST['rental_payment'];
    $order->security_negotiable = $_POST['security_negotiable'];*/
    
    // create the order
    echo $order->create() ? "true" : "false";
}
?>