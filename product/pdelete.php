<?php

echo "<pre>";

//collect data
//validate data and throw exception
//delete the records into database table
//display messagge successful insertion 
//redirect to back page

require_once '../adapter/adapter.php';

$link = $_GET['id'];
$query = "DELETE from `product` where `product_id` = '$link'";
$adaptervar = new adapter(); //which class i am accessing and after access, store it
$result = $adaptervar->deleteFun($query);
// $adaptervar->deleteFun($query);

// Redirect browser
header("Location: http://localhost/project/product/product.php");

exit;
?>