<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../table.css">
    <link rel="stylesheet" href="../home.css">

    <title>Category</title>
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
            <h2> Product Category</h2>
            <a href="cadd.php">Add Category</a>
        </div>
        <!-- HOME -->
       <div class="home">
        <table border="1px">
            <tr>
                <th>category_id</th>
                <th>name</th>
                <th>status</th>
                <th>description</th>
                <th><a href="/project/category/cedit.php">EDIT</a></th>
                <th><a>DELETE</a></th>
            </tr>
            
            <!-- GET DATA AND DISPLAY IT -->
            <?php
            $mysqli = new mysqli('localhost', 'root', '', 'project');
            
            //display category database
            // $gettable = "SELECT * from `category` WHERE 1";
            // $result = $mysqli->query($gettable); 
            // $get_alldata = $result->fetch_all(MYSQLI_ASSOC); 

            //get file 
            require_once '../adapter/adapter.php';
            //display database class method
            $query = "SELECT * FROM `category` WHERE 1";
            $adaptervar = new adapter();
            $category = $adaptervar->fetchAll($query);

            //loop through each item
            // foreach($get_alldata as $eachitem){
            foreach($category as $eachitem){

                echo "<tr>";
                echo "<td>".$eachitem['category_id']."</td>";
                echo "<td>".$eachitem['name']."</td>";
                echo "<td>".$eachitem['status']."</td>";
                echo "<td>".$eachitem['description']."</td>";
                echo "<td><a href='cedit.php'>EDIT</a></td>";
                echo "<td><button>DELETE</button></td>";
                echo "</tr>";
            }

            ?>

            <!-- statically displayed data -->
            <?php
                // for ($i=1; $i <=12 ; $i++) {
                // echo "<tr>";
                // echo "<td>".$i ."</td>";
                // echo "<td>n.</td>";
                // echo "<td>s.</td>";
                // echo "<td>des.</td>";
                // echo "<td><a href='cedit.php'>EDIT</a></td>";
                // echo "<td><button>DELETE</button></td>";
                // echo "</tr>";
                // }
            ?>
        </table>
       </div>
    </div>
</body>
</html>