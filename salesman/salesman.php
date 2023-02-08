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
            

            <?php
                for ($i=1; $i <=12 ; $i++) {
                echo "<tr>";
                echo "<td>".$i ."</td>";
                echo "<td>f name</td>";
                echo "<td>l name</td>";
                echo "<td>mail</td>";
                echo "<td>g.</td>";
                echo "<td>phone</td>";
                echo "<td>s.</td>";
                echo "<td>c.</td>";
                echo "<td><a href='sedit.php'>EDIT</a></td>";
                echo "<td><button>DELETE</button></td>";
                echo "</tr>";
                }
            ?>
        </table>
       </div>
    </div>
</body>
</html>