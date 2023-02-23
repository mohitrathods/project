<?php
//get access to class
require_once '../adapter/adapter.php';
$adaptervar = new adapter();

// ---------------------- query to check id
//get id
$link = $_GET['id'];
$checkid = "SELECT `vendor_id` FROM `vendor` WHERE `vendor_id` = $link";

//result
$idresult = $adaptervar->fetchNumber($checkid);
// echo($idresult);
// ---------------------- query to check id

if ($idresult['vendor_id'] === $link) {
    

        // get all values from input with post method
        $vendor_id = $_POST['vendor_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $mobile = $_POST['mobile'];
        $status = $_POST['status'];
        $company = $_POST['company'];

        //get date time
        date_default_timezone_set('Asia/Kolkata');
        $date = date('m/d/Y h:i:s a', time());
        $datetime = date("y-m-d h:i:sA");
        //echo "$datetime";

        $adaptervar = new adapter();


        // ---------------------- query to update
        $query = "UPDATE `vendor`
        SET `vendor_id` = '$vendor_id', `first_name` = '$first_name',`last_name` = '$last_name', `email` = '$email',
        `gender` = '$gender',`mobile` = '$mobile' , `status` = '$status', `company` = '$company',`updated_at` = '$datetime'
        WHERE `vendor_id` = $link";

        $result = $adaptervar->updateFun($query);

        // ---------------------- query to update

        // redirect
        header("location:http://localhost/project/vendor/vendor.php");
        exit;
}
else {
    echo "Error";
}
?>