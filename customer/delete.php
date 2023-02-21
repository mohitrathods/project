<?php

echo "<pre>";

// prepare customrer.php file

//require file
require_once  '../adapter/adapter.php';

// get id
$link = $_GET['id']; //this id from customer >  delete button

// write delete query
$query = "DELETE FROM `customer` WHERE `customer_id` = '$link'";

//get access to class
$adaptervar = new adapter();

//delete function
$result = $adaptervar->deleteFun($query);

//collect data
//validate data and throw exception
//delete the records into database table
//display messagge successful insertion 
//redirect to back page

// Redirect browser
header("Location: http://localhost/project/customer/customer.php");

exit;
?>