<?php 
require_once '../adapter/adapter.php';
$adaptervar = new adapter();

//-------------------- MATCH ID
$link = $_GET['id'];

$matchid = "SELECT `payment_method_id` from `payment` WHERE `payment_method_id` = $link";
$resultid = $adaptervar->fetchNumber($matchid);
//-------------------- MATCH ID

//---------------------- GET USER INPUTS FROM POST METHOD
$payment_method_id = $_POST['payment_method_id'];
$name = $_POST['name'];
$amount = $_POST['amount'];
$status = $_POST['status'];

        //datetime
        date_default_timezone_set('Asia/Kolkata');
        $date = date('m/d/Y h:i:s a', time());
        $datetime = date("y-m-d h:i:sA");

        $adaptervar = new adapter();

        //query to update
        $query = "UPDATE `payment` 
        SET `payment_method_id` = '$payment_method_id', `name` = '$name' , `amount` = '$amount' , `status` = '$status', `updated_at` = '$datetime'
        WHERE `payment_method_id` = $link";

        //result
        $result = $adaptervar->updateFun($query);

        //redirect and close
        header("location:http://localhost/project/payment/payment.php");
        exit;

//---------------------- GET USER INPUTS FROM POST METHOD

?>