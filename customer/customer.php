<!-- fetch entries from db -->
<!-- display entries -->
<!-- setup the delete  -->
<?php
// $customername = [
// ['customer_id' => 1, 'name' => 'mohit rathod'],
// ['customer_id' => 2, 'name' => 'mohit rathod'],
// ['customer_id' => 3, 'name' => 'mohit rathod'],
// ['customer_id' => 4, 'name' => 'mohit rathod']
// ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../table.css">
    <link rel="stylesheet" href="../home.css">

    <title>Customer</title>
</head>
<body>
    <!-- MAIN -->
    <div class="main">

         <!-- NAVBAR -->
         <div class="nav">
            <!-- ALL NAV LINKS : product, category, customer, verdor, salseman, shipping & payment methods -->
            <a href="/project/product/product.php" target="_self">Product</a>
            <a href="/project/category/category.php">Category</a>
            <a href="/project/customer/customer.php">Customer</a>
            <a href="/project/vendor/vendor.php">Vendor</a>
            <a href="/project/salesman/salesman.php">Salesman</a>
            <a href="/project/shipping/shipping.php" >Shipping Method</a>
            <a href="/project/payment/payment.php">Payment Method</a>
        </div>

        <!-- HEADING and button-->
        
        <div class="head">
            <h2>Manage Customers</h2>
            <a href="cadd.php">Add Customer</a>
        </div>
        <!-- HOME -->
       <div class="home">
        <table border="1px">
            <tr>
                <th>customer_id</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>email</th>
                <th>gender</th>
                <th>mobile</th>
                <th>status</th>
                <th><a></a>EDIT</a></th>
                <th><a>DELETE</a></th>

            </tr>
            
            <!-- dynamic data from database -->
            <?php
                //connect
            // $mysqli = new mysqli('localhost', 'root', '', 'project');

            // //write query, store it, fire it
            // $gettable = "SELECT * FROM `customer` WHERE 1";
            // //fire it
            // $result = $mysqli->query($gettable);
            // // get data and store it
            // $get_alldata = $result->fetch_all(MYSQLI_ASSOC);
            
            //require adapter.php file
            require_once '../adapter/adapter.php';
            //SINGLE QUERY
            $query = "SELECT* FROM `customer` WHERE 1";
            $adaptervar = new adapter(); //get access to class adapter from adapter.php
            $customers = $adaptervar->fetchAll($query);

            // loop through each
            // foreach ($get_alldata as $eachitem){
            foreach ($customers as $eachitem){

                echo "<tr>";
                echo "<td>" . $eachitem['customer_id'] . "</td>";
                echo "<td>" . $eachitem['first_name'] . "</td>";
                echo "<td>" . $eachitem['last_name'] . "</td>";
                echo "<td>" . $eachitem['email'] . "</td>";
                echo "<td>" . $eachitem['gender'] . "</td>";
                echo "<td>" . $eachitem['mobile'] . "</td>";
                echo "<td>" . $eachitem['status'] . "</td>";
                echo "<td><a href='pedit.php'>EDIT</a></td>";
                echo "<td><button>DELETE</button></td>";
                echo "</tr>";
            }
            ?>

            <!-- static data -->
            <?php
                // for ($i=1; $i <=12 ; $i++) {
                // echo "<tr>";
                // echo "<td>".$i ."</td>";
                // echo "<td>f name</td>";
                // echo "<td>l name</td>";
                // echo "<td>mail</td>";
                // echo "<td>g.</td>";
                // echo "<td>phone</td>";
                // echo "<td>s.</td>";
                // echo "<td><a href='pedit.php'>EDIT</a></td>";
                // echo "<td><button>DELETE</button></td>";
                // echo "</tr>";
                // }
            ?>

        </table>
       </div>
    </div>
</body>
</html>