<?php
echo "<pre>";

function Connect() {
    echo "1, 2, 3";
    $mysqli = new mysqli('localhost', 'root','', 'project');
    // print_r($mysqli);
    // mysqli_connect();

    // display product database
    $gettable = "SELECT * from `product` WHERE 1";
    $result = $mysqli->query($gettable);
    // print_r($result);
    $products = $result->fetch_all(MYSQLI_ASSOC);
    print_r($products);
}
Connect();



?>