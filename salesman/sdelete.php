<?php
//require file
require_once '../adapter/adapter.php';

//get access to class
$adaptervar = new adapter();

// get id
$link = $_GET['id'];

// query
$query = "DELETE FROM `salesman` WHERE `salesman_id` = $link";

// result
$result = $adaptervar->deleteFun($query);

// redirect
header("location:http://localhost/project/salesman/salesman.php");
exit;

?>