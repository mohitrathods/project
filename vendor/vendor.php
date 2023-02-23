<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../table.css">
    <link rel="stylesheet" href="../home.css">

    <title>Vendor</title>
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
            <h2>Vendor data</h2>
            <a href="vadd.php">add vendor</a>
        </div>
        <!-- HOME -->
       <div class="home">
        <table border="1px">
            <tr>
                <th>vendor_id</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>email</th>
                <th>gender</th>
                <th>mobile</th>
                <th>status</th>
                <th>company</th>
                <th><a href="vedit.php">EDIT</a></th>
                <th><a >DELETE</a></th>
            </tr>
            
            <!-- data from database -->
            <?php
            $mysqli = new mysqli('localhost','root','','project');
            
            //query
            // $gettable = "SELECT * FROM `vendor` WHERE 1";
            // // store table data in result var & fire query gettable on mysqli variable
            // $result = $mysqli->query($gettable);
            // // fire query on result and store in get_alldata var
            // $get_alldata = $result->fetch_all(MYSQLI_ASSOC);

            //GET DATA FROM SINGLE QUERY
            //add file
            require_once '../adapter/adapter.php';
            //query to be performed | QUERIES WRITTEN HERE TO BE PERFORMED FOR THE TABLE
            $query = "SELECT * FROM `vendor` WHERE 1";
            $adaptervar = new adapter();
            $vendordata = $adaptervar->fetchAll($query);

            // display data
            // foreach ($get_alldata as $eachitem){
            
                foreach ($vendordata as $eachitem){
            ?>
            <tr>
                <td><?php echo $eachitem['vendor_id'] ?></td>
                <td><?php echo $eachitem['first_name'] ?></td>
                <td><?php echo $eachitem['last_name'] ?></td>
                <td><?php echo $eachitem['email'] ?></td>
                <td><?php echo $eachitem['gender'] ?></td>
                <td><?php echo $eachitem['mobile'] ?></td>
                <td><?php echo $eachitem['status'] ?></td>
                <td><?php echo $eachitem['company'] ?></td>
                <td><a href="vedit.php?id=<?php echo $eachitem['vendor_id'] ?>">EDIT</a></td>
                <td><a href="vdelete.php?id=<?php echo $eachitem['vendor_id'] ?>">DELETE</a></td>
            </tr>
            <?php
            }

            ?>

            <!-- STATICALLy added data -->
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
                // echo "<td>c.</td>";
                // echo "<td><a href='vedit.php'>EDIT</a></td>";
                // echo "<td><button>DELETE</button></td>";
                // echo "</tr>";
                // }
            ?>
        </table>
       </div>
    </div>
</body>
</html>