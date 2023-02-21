<?php
//this file only delete things by getting id

echo "<pre>";

//get id
$link = $_GET['id'];
echo($link);

//query
$query = "DELETE FROM `category` WHERE `category_id` = '$link'";

//get the adapter file
require_once '../adapter/adapter.php';

//store adapter class in variable 
$adaptervar = new adapter();

//get the data
// $result = $adaptervar->deleteFun($query); //fire deleteFun on query and pass parameter
$adaptervar->deleteFun($query);
header("location:http://localhost/project/category/category.php");
exit;
?>