<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../home.css">
    <link rel="stylesheet" href="../table.css">

    <title>Payment</title>
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
            <h2>Payment data</h2>
            <a href="padd.php">Add data</a>
        </div>
        <!-- HOME -->
       <div class="home">
        <table border="1px">
            <tr>
                <th>payment_method_id</th>
                <th>name</th>
                <th>amount</th>
                <th>status</th>
                <th><a>EDIT</a></th>
                <th><a>DELETE</a></th>
            </tr>
            

            <?php
                for ($i=1; $i <=12 ; $i++) {
                echo "<tr>";
                echo "<td>".$i ."</td>";
                echo "<td>n.</td>";
                echo "<td>a.</td>";
                echo "<td>s.</td>";
                echo "<td><a href='pedit.php'>EDIT</a></td>";
                echo "<td><button>DELETE</button></td>";
                echo "</tr>";
                }
            ?>
        </table>
       </div>
    </div>
</body>
</html>