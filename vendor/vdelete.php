<?php
//set up the vendor file
//require the class file
require_once '../adapter/adapter.php';

//get access to class
$adaptervar = new adapter();

//get the id
$link = $_GET['id'];

//write query to delete
$query = "DELETE FROM `vendor` WHERE `vendor_id` = $link";

//perform function
$result = $adaptervar->deleteFun($query);

//redirect
header("location:http://localhost/project/vendor/vendor.php");
exit;

?>