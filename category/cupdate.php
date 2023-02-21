<?php
// cedit used for frontend cupdate for backend
echo "<pre>";

// require the file
require_once '../adapter/adapter.php';

//get function and connection
$adaptervar =  new adapter();

/*IN UPDATE, I HAVE TO GET ID AND UPDATE THE VALUES SO, I MUST HAVE TO WRITE QUERY TO COMPARE THE
ID WITH SELECTED IT */

/*-----------------------------------------------*/

//get the link means id
$link = $_GET['id'];

//get id query
$idquery = "SELECT `category_id` FROM `category` WHERE `category_id` = $link";

//fetchNumber call the function
$idresult = $adaptervar->fetchNumber($idquery);

/*-----------------------------------------------*/


if ($idresult['category_id'] === $link) {
    //date time
    date_default_timezone_set('Asia/Kolkata');
    $datetime = date("y-m-d h:i:sA");
    //echo $datetime;
    //create connection

    //get function and connection
    $adaptervar =  new adapter();

    // GET  THE VALUES FROM INPUT 
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $status = $_POST['status'];
    $description = $_POST['description'];

    $adaptervar = new adapter();

    // WRITE QUERY
    $query = "UPDATE `category`
    SET `category_id` = '$category_id', `name`='$name',   `status`='$status', `description`='$description',`updated_at`='$datetime'
    WHERE `category_id`=$link";

    //store in result or as it is
    $result = $adaptervar->updateFun($query);

    //redirect
    header("location:http://localhost/project/category/category.php");
    exit;
  
}

else{
    echo "error";
}


?>