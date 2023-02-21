<?php 
echo "<pre>";
//get access to class and require file
require_once '../adapter/adapter.php';
$adaptervar = new adapter();

//get id with GET method
$link  = $_GET['id'];

// COMPARE ID QUERY
$compareid = "SELECT `customer_id` FROM `customer` WHERE `customer_id` = $link";
$resultid = $adaptervar->fetchNumber($compareid);


if($resultid['customer_id'] === $link){
        //date time updated at
            date_default_timezone_set('Asia/Kolkata');
            $date = date('m/d/Y h:i:s a', time());
            $datetime = date("y-m-d h:i:sA");
            // echo $datetime;

        //
        //
        //
        //get all input from edit.php file with the help of post method
        $customer_id = $_POST['customer_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $mobile = $_POST['mobile'];
        $status = $_POST['status'];


        // WRITE QUERY TO UPDATE
        $query = "UPDATE `customer` SET `customer_id` = '$customer_id',`first_name` = '$first_name',`last_name` = '$last_name',
        `email` = '$email', `gender` = '$gender', `mobile` = '$mobile',`status` = '$status' , `updated_at` = '$datetime'
        WHERE `customer_id` = $link;
        ";

        // GET QUERY IN RESULT
        $result = $adaptervar->updateFun($query);

        //redirect
        header("location:http://localhost/project/customer/customer.php");
        exit;
}

else {
    echo  "error";
}

?>
