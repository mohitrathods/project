<?php
//get access to class
require_once '../adapter/adapter.php';
$adaptervar =  new adapter();

//get values and datetime
$payment_method_id = $_POST['payment_method_id'];
$name = $_POST['name'];
$amount = $_POST['amount'];
$status = $_POST['status'];

//date and time created at
date_default_timezone_set('Asia/Kolkata');
$datetime = date("y-m-d h:i:sA");

//insert query
$query = "INSERT INTO `payment`(`payment_method_id`,`name`,`amount`,`status`,`created_at`)
VALUES ('$payment_method_id','$name','$amount','$status','$datetime')
";

// fire function
$result = $adaptervar->insertFun($query);

// redirect
header("location:http://localhost/project/payment/payment.php");
exit;
?>