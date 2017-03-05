<?php

include_once '../config/core.php';
include_once '../config/database.php';
include_once '../objects/order.php';


 // class instance
    $database = new Database();
    $db = $database->getConnection();
    $order = new Order($db);
 
    $order->name = $_POST['customer_name'];
    $order->price = $_POST['price'];
    $order->category = $_POST['category'];
    $order->description = $_POST['description'];
    $order->type = $_POST['type'];
    $order->start_date = $_POST['start_date'];
    $order->expiry_date = $_POST['expiry_date'];
    $order->customer_id = $_POST['customer_id'];
    $order->job_order_no = $_POST['job_order_no'];
    $order->job_order_location = $_POST['job_order_location'];

$file=$_FILES['work_order'];
$upload_directory='../uploads/';
$ext_str = "gif,jpg,jpeg,mp3,tiff,bmp,doc,docx,ppt,pptx,txt,pdf";
$allowed_extensions=explode(',',$ext_str);
$max_file_size = 10485760;//10 mb remember 1024bytes =1kbytes /* check allowed extensions here */
$ext = substr($file['name'], strrpos($file['name'], '.') + 1); //get file extension from last sub string from last . character
if (!in_array($ext, $allowed_extensions) ) {
echo "only".$ext_str." files allowed to upload"; // exit the script by warning

} /* check file size of the file if it exceeds the specified size warn user */

if($file['size']>=$max_file_size){

echo "only the file less than ".$max_file_size."mb  allowed to upload"; // exit the script by warning

}

//if(!move_uploaded_file($file['tmp_name'],$upload_directory.$file['name'])){

$path=md5(microtime()).'.'.$ext;

if(move_uploaded_file($file['tmp_name'],$upload_directory.$path)){

    $order->work_order = $path;
    $order->security_letter = $path;
    $order->rental_payment = $path;
    $order->security_negotiable = $path;

}

else{

echo "The file cant moved to target directory."; //file can't moved with unknown reasons likr cleaning of server temperory files cleaning

}

 echo $order->create() ? "true" : "false";


?>