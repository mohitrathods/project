<?php
echo "<pre>";
// cinsert.php for queries and cadd used for frontend

//make changes to cadd.php file first

//require file
require_once '../adapter/adapter.php';

// GET THE VALUES FROM INPUT
$category_id = $_POST['category_id'];
$name = $_POST['name'];
$status = $_POST['status'];
$description = $_POST['description'];
/* how i am getting input values here? -> when method is post in form, here with the help of $_POST method
i get original values form the input */


//date time
date_default_timezone_set('Asia/Kolkata');
$datetime = date("y-m-d h:i:sA");
//echo $datetime;
//create connection

//make query to insert
//category( here all column names)
//VALUES( here all values i get from input)
$query = "INSERT INTO `category`(`category_id`,`name`,`status`,`description`,`created_at`)
VALUES('$category_id','$name','$status','$description','$datetime')";

//get connection
$adaptervar = new adapter();

// get results
$result = $adaptervar->insertFun($query);

//redirect
header("location:http://localhost/project/category/category.php");
exit;

?>