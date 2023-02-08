<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="table.css">

    <title>Project Home</title>
</head>
<body>
    <!-- HOME page -->
    <div class="main">
         <!-- NAVBAR -->
         <!-- <div class="nav"> -->
            <!-- ALL NAV LINKS : product, category, customer, verdor, salseman, shipping & payment methods -->
            <!-- <a href="home.php" target="_self">Product</a>
            <a href="category.php">Category</a>
            <a href="customer.php">Customer</a>
            <a href="vendor.php">Vendor</a>
            <a href="salesman.php">Salesman</a>
            <a href="shipping.php" >Shipping Method</a>
            <a href="payment.php">Payment Method</a> -->
        <!-- </div> -->


        <!-- HOME CONTENT -->
        <div class="home">

            <!-- PRODUCT COMPONENT IS SHOWN IN HOME PAGE -->
            <?php require_once 'product/product.php'; ?>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            <h3>copyright ecomproject 2023 </h3>
        </div>
    </div>
</body>
</html>