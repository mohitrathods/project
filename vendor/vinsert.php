<?php
//require file get access to class and fucntions
require_once '../adapter/adapter.php';
$adaptervar = new adapter();


//get values from input by user and store in variable
$vendor_id = $_POST['vendor_id']; //get values using post method from form on vadd.php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$status = $_POST['status'];
$company = $_POST['company'];

//get date and time
date_default_timezone_set('Asia/Kolkata');
$datetime = date("y-m-d h:i:sA");
//echo $datetime;


// $query to insert
$query = "INSERT INTO `vendor`(`vendor_id`,`first_name`,`last_name`,`email`,`gender`,`mobile`,`status`,`company`,`created_at`)
VALUES ('$vendor_id','$first_name','$last_name','$email','$gender','$mobile','$status','$company', '$datetime')";


// get result fire function
$result = $adaptervar->insertFun($query);

//redirect
header("location:http://localhost/project/vendor/vendor.php");
exit;

?>