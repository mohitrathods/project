<?php 
//reqi=uire file and access to class functions
require_once '../adapter/adapter.php';
$adaptervar = new adapter();

//get user input from post method save in variable
$salesman_id = $_POST['salesman_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$status = $_POST['status'];
$company = $_POST['company'];

// get date and time
date_default_timezone_set('Asia/Kolkata');
$datetime = date("y-m-d h:i:sA");
//echo $datetime;

// write insert query
$query = "INSERT INTO `salesman`(`salesman_id`,`first_name`,`last_name`,`email`,`gender`,`mobile`,`status`,`company`,`created_at`)
VALUES ('$salesman_id','$first_name','$last_name','$email','$gender','$mobile','$status','$company','$datetime')";

// fire function
$result = $adaptervar->insertFun($query);

header("location:http://localhost/project/salesman/salesman.php");
exit;

?>