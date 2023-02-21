<?php
//set up the payment.php file

// get access to class and require file
require_once '../adapter/adapter.php';
$adaptervar = new adapter();

// get id
$link = $_GET['id'];

// query
$query = "DELETE FROM `payment` WHERE `payment_method_id` = $link";

// result
$result = $adaptervar->deleteFun($query);

// redirect
// header("location:http://localhost/project/payment/payment.php");
header("location:http://localhost/project/payment/payment.php");

exit;

?>