<?php
echo '<pre>';
require_once "../adapter/adapter.php";

print_r($_POST);
// print_r($_POST['first_name']);

//collect the data 
//validate the data throw exception
//insert the records into database table
//set a msg for sucessfull insertion
//redirect on main page

$name = $_POST['name'];
$sku =  $_POST['sku'];
$cost = $_POST['cost'];
$price = $_POST['price'];
$quantity =  $_POST['quantity'];
$description = $_POST['description'];
$color = $_POST['color'];
$status = $_POST['status'];
$material = $_POST['material'];


//date and time
date_default_timezone_set('Asia/Kolkata');
$datetime = date("y-m-d h:i:sA");
//echo $datetime;
//create connection


// to do it, get access to connection file
// require_once "../adapter/adapter.php";
$adaptervar = new adapter();

//write sql query
$query = "INSERT INTO `product`(`name`,`sku`,`cost`,`price`,`quantity`,`description`,`color`,`status`,`material`,`created_at`)
VALUES ('$name','$sku','$cost','$price','$quantity','$description','$color','$status','$material','$datetime')";

//get result
$result =  $adaptervar->insertFun($query);
// print_r($result);

header("location:http://localhost/project/product/product.php");
exit();
?>