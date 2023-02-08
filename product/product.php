<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../table.css">
    <link rel="stylesheet" href="../home.css">
    <title>Product</title>
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
            <h2>Manage Products</h2>
            <a href="padd.php">Add product</a>
        </div>
        <!-- HOME -->
       <div class="home">
        <table border="1px">
            <tr>
                <th>product_id</th>
                <th>sku</th>
                <th>cost</th>
                <th>price</th>
                <th>quantity</th>
                <th>description</th>
                <th>color</th>
                <th>status</th>
                <th>material</th>
                <th><a >EDIT</a></th>
                <th><a>DELETE</a></th>
            </tr>
            
            <!-- create array -->
            <?php
            //DATA TO BE INSERTED
            $product_table = [
                ['product_id'=>1,'sku'=>'sku1','cost'=>100,'price'=>200,'quantity'=>1,'description'=>'abcd','status'=> 'yes' ,'color'=>'blue','material'=>'metal'],
                ['product_id'=>2,'sku'=>'sku2','cost'=>200,'price'=>400,'quantity'=>2,'description'=>'efgh','status'=> 'yes' ,'color'=>'red','material'=>'plastic'],
                ['product_id'=>3,'sku'=>'sku3','cost'=>300,'price'=>600,'quantity'=>3,'description'=>'ijkl','status'=> 'yes' ,'color'=>'green','material'=>'gas'],
            ];
            ?>
            <?php
            // loop through this array with foreach
            foreach ($product_table as $arrayy) {
            ?>
            <tr>
                <td><?php echo $arrayy['product_id'];?></td>
                <td><?php echo $arrayy['sku'];?></td>
                <td><?php echo $arrayy['cost'];?></td>
                <td><?php echo $arrayy['price'];?></td>
                <td><?php echo $arrayy['quantity'];?></td>
                <td><?php echo $arrayy['description'];?></td>
                <td><?php echo $arrayy['color'];?></td>
                <td><?php echo $arrayy['status'];?></td>
                <td><?php echo $arrayy['material'];?></td>
                <td><a href="pedit.php">EDIT</a></td>
                <td><a href="pdelete.php">DELETE</a></td>
                
            </tr>
            <?php
            }
            ?>

            

            <?php
                // for ($i=1; $i <=12 ; $i++) {
                // echo "<tr>";
                // echo "<td>".$i ."</td>";
                // echo "<td>sku</td>";
                // echo "<td>c</td>";
                // echo "<td>p</td>";
                // echo "<td>q</td>";
                // echo "<td>des.</td>";
                // echo "<td>c</td>";
                // echo "<td>s</td>";
                // echo "<td>m</td>";
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