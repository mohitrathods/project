<?php 
require_once '../adapter/adapter.php';
$adaptervar = new adapter();

//-------------------- MATCH ID
$link = $_GET['id'];

$matchid = "SELECT `shipping_method_id` from `shipping` WHERE `shipping_method_id` = $link";
$resultid = $adaptervar->fetchNumber($matchid);
//-------------------- MATCH ID

//---------------------- GET USER INPUTS FROM POST METHOD
$shipping_method_id = $_POST['shipping_method_id'];
$name = $_POST['name'];
$amount = $_POST['amount'];
$status = $_POST['status'];

        //datetime
        date_default_timezone_set('Asia/Kolkata');
        $date = date('m/d/Y h:i:s a', time());
        $datetime = date("y-m-d h:i:sA");

        $adaptervar = new adapter();

        //query to update
        $query = "UPDATE `shipping` 
        SET `shipping_method_id` = '$shipping_method_id', `name` = '$name' , `amount` = '$amount' , `status` = '$status', `updated_at` = '$datetime'
        WHERE `shipping_method_id` = $link";

        //result
        $result = $adaptervar->updateFun($query);

        //redirect and close
        header("location:http://localhost/project/shipping/shipping.php");
        exit;

//---------------------- GET USER INPUTS FROM POST METHOD

?>