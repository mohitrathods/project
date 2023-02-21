<?php
// prepare the shipping.php file set id in href

//add required file and define class
require_once '../adapter/adapter.php';
$adaptervar = new adapter();

//get id
$link = $_GET['id']; //get id from post method in post

//query to match id
$query = "DELETE FROM `shipping` WHERE `shipping_method_id` = $link";

// store in result
$result = $adaptervar->deleteFun($query);

//redirect 
header("location:http://localhost/project/shipping/shipping.php");
exit;

?>