<!-- connectivity : mysql & client side-->

<?php
echo "<pre>";
function Connect(){
    echo "1,2,3";

    $mysqli = new mysqli('localhost', 'root', '', 'project');
    print_r($mysqli); //connected it will show details of methods
    // mysqli_connect();



       
}
Connect();

//SEE AL METHODS apply diffrent methods
print_r(get_class_methods($mysqli));
 $sql = "SELECT * from `product` WHERE 1";
        $result = $mysqli->query($sql); //displays from database
    print_r($result);

    
// ----------------
// fetch_all() method
$products = $result->fetch_all();
// $products = $result->fetch_all(MYSQL_ASSOC);
print_r($products); //index key aavse apde key value joi 6
//fetch array will provide index and key value 

/*include this file in main product page <?php require_once... ?> */
//now give names of column as 

