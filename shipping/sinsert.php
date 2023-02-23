<?php
require_once '../adapter/adapter.php';
$adaptervar = new adapter();

// get values from [post ] method

$shipping_mehtod_id = $_POST['shipping_method_id'];
$name = $_POST['name'];
$amount = $_POST['amount'];
$status = $_POST['status'];

//datetime
date_default_timezone_set('Asia/Kolkata');
$datetime = date("y-m-d h:i:sA");
//echo $datetime;

//insert query
$query = "INSERT INTO `shipping`(`shipping_method_id`,`name`,`amount`,`status`,`created_at`)
VALUES ('$shipping_method_id','$name','$amount','$status','$datetime')
";

// result
$result = $adaptervar->insertFun($query);

header("location:http://localhost/project/shipping/shipping.php");
exit;

?>