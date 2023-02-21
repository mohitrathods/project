<?php 

// <!-- IN THIS FILE ALL QUERIES TO BE PERFORMED WRITTEN HERE
// IN PEDIT.PHP I HAVE FRONTEND TO UPDATE THE PRODUCT
// TO DELETE THE PRODUCT, ONLY CLICK AND SELECT THE id -->
// <!-- collect id -->
// <!-- validate id n throw exception -->
// <!-- collect data -->
// <!-- update existing data with new data -->
// <!-- set success msg and redirect -->

echo '<pre>';

//get access to file
require_once '../adapter/adapter.php';

$adaptervar = new adapter();

//get product id which product to edit 
$link = $_GET['id']; //get the id and store in link

//get the selected product id and check if it is id that i get from GET method
$getidquery = "SELECT `product_id` FROM `product` WHERE `product_id`=$link";

//store id in idresult variable
$idresult = $adaptervar->fetchNumber($getidquery);

if ($idresult['product_id'] === $link ) {
    

    //store each content in variable and with post method, get access to input with 
    //name attribute of input
    $name = $_POST['name'];
    $sku = $_POST['sku'];
    $cost = $_POST['cost'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $color = $_POST['color'];
    $material = $_POST['material'];


    //date time updated at
    date_default_timezone_set('Asia/Kolkata');
    $date = date('m/d/Y h:i:s a', time());
    $datetime = date("y-m-d h:i:sA");
    // echo $datetime;

    $adaptervar = new adapter();

    //create query
    $query = "UPDATE `product` SET `name`='$name',`sku`='$sku',`cost`='$cost',`price`='$price',`quantity`='$quantity',`description`='$description',`color`='$color',`status`='$status',`material`='$material',`updated_at`='$datetime' WHERE `product_id`=$link;";

    //get result
    $result = $adaptervar->updateFun($query);
    //print_r($result);

    //redirect to
    header("location:http://localhost/project/product/product.php");
    exit();
}

else {
    echo "error";
}

?>
