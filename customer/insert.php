<?php

echo "<pre>";
//set up the cadd file main front end file

//get access to adapter file and class adapter
require_once '../adapter/adapter.php';
$adaptervar = new adapter();

//created at

//date time
date_default_timezone_set('Asia/Kolkata');
$datetime = date("y-m-d h:i:sA");
//echo $datetime;
//create connection

// get current values from input box with the help of form method "post" and save in variable
$customer_id = $_POST['customer_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$status = $_POST['status'];

//write query for insert
$query = "INSERT INTO `customer`(`customer_id`,`first_name`,`last_name`,`email`,`gender`,`mobile`,`status`,`created_at`)
VALUES ('$customer_id','$first_name','$last_name','$email','$gender','$mobile','$status','$datetime')
";

// DON'T FORGET TO APPLY FUNCTION 
$result = $adaptervar->insertFun($query);

// Redirect browser
header("Location: http://localhost/project/customer/customer.php");

exit;

//DELETE RECORD
//after edit button



?>