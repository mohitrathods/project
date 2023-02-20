<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../table.css">
    <link rel="stylesheet" href="../home.css">

    <title>Salesman</title>
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
            <h2>Salesman data</h2>
            <a href="sadd.php">add data</a>
        </div>
        <!-- HOME -->
       <div class="home">
        <table border="1px">
            <tr>
                <th>salesman_id</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>email</th>
                <th>gender</th>
                <th>mobile</th>
                <th>status</th>
                <th>company</th>
                <th><a >EDIT</a></th>
                <th><a >DELETE</a></th>
            </tr>
            
            <!-- dynamic data from database -->
            <?php
            
            $mysqli = new mysqli('localhost', 'root', '', 'project');

            // //get database
            // // query
            // $gettable = "SELECT * FROM `salesman` WHERE 1";
            // // store it
            // $result = $mysqli->query($gettable);
            // //get items
            // $get_alldata = $result->fetch_all(MYSQLI_ASSOC);

            //GETTING DATA FROM adapter class functions etc
            require_once '../adapter/adapter.php';
            //write quer to be performed
            $query = "SELECT salesman_id, first_name from `salesman`";
            $adaptervar = new adapter();
            $salesmandata = $adaptervar->fetchAll($query);


            // foreach ($get_alldata as $eachitem){
            foreach ($salesmandata as $eachitem){
                echo "<tr>";
                echo "<td>".$eachitem['salesman_id']."</td>";
                echo "<td>".$eachitem['first_name']."</td>";
                echo "<td>".$eachitem['last_name']."</td>";
                echo "<td>".$eachitem['email']."</td>";
                echo "<td>".$eachitem['gender']."</td>";
                echo "<td>".$eachitem['mobile']."</td>";
                echo "<td>".$eachitem['status']."</td>";
                echo "<td>".$eachitem['company']."</td>";
                echo "<td><a href='sedit.php'>EDIT</a></td>";
                echo "<td><button>DELETE</button></td>";
                echo "</tr>";
            }
            ?>

            <!-- static data -->
            <?php
                for ($i=1; $i <=12 ; $i++) {
                // echo "<tr>";
                // echo "<td>".$i ."</td>";
                // echo "<td>f name</td>";
                // echo "<td>l name</td>";
                // echo "<td>mail</td>";
                // echo "<td>g.</td>";
                // echo "<td>phone</td>";
                // echo "<td>s.</td>";
                // echo "<td>c.</td>";
                // echo "<td><a href='sedit.php'>EDIT</a></td>";
                // echo "<td><button>DELETE</button></td>";
                // echo "</tr>";
                }
            ?>
        </table>
       </div>
    </div>
</body>
</html>