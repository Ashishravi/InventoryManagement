<?php
// include core configuration
include_once '../config/core.php';
 
// include database connection
include_once '../config/database.php';
 
// product object
include_once '../objects/order.php';
 
// class instance
$database = new Database();
$db = $database->getConnection();
$order = new Order($db);
 
// read all products
$results=$order->readAll();
 
// output in json format
echo $results;
?>