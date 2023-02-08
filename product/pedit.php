<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../add.css"> 
    <title>Edit Product</title>
</head>
<body>
<div class="main">
    <form>
        <!-- header -->
        <div class="heading" >
            <h2>Edit Product</h2>
            <a href="../product/product.php">CANCEL</a>
            <button type="submit">SAVE</button>
        </div>
            <!-- main content form -->
        <div class="content">
            <!-- form -->
            <form class="formclass" action="pinsert.php" method="post">
                <h2>PRODUCT INFORMATION</h2>

                <?php
                //DATA TO BE EDITED
                //collect the id
                //validate the id
                // print_r($_POST);

                $product_data_edit =['product_id'=> 5, 'sku'=>'345k', 'cost'=>400,'price' => 800,'quantity'=>50,'description'=>'edited des.', 'color'=>'green','status'=> 'yes','material'=>'semiconducter' ];

                ?>

            <div class="extra">
                <label>NAME</label>
                <!-- <input type="text" name="name" value="" placeholder="product name" />    -->
                <!-- set the values into input -->
                <!-- this will set values in inputbox -->
                <input type="text" name="id" value=<?php echo $product_data_edit['product_id'] ?> placeholder="price"></input>

                <label>SKU</label>
                <input type="text" name="sku" value=<?php echo $product_data_edit['sku'] ?> placeholder="price" />

                <label>COST</label>
                <input type="text" name="cost" value=<?php echo $product_data_edit['cost'] ?> placeholder="price" />

                
            </div>

            <div class="extra">
                <label>PRICE</label>
                <input type="text" name="price" value=<?php echo $product_data_edit['price'] ?> placeholder="price" />
                <label>QUANTITY</label>
                <input type="text" name="name" value=<?php echo $product_data_edit['quantity'] ?> placeholder="enter quantity" />
                <label>DESCRIPTION</label>
                <input type="text" name="description"  value=<?php echo $product_data_edit['description'] ?>></input>
            </div>
                
            <div class="extra">
                <label>STATUS</label>
               <select name="status">
                    <!-- <option value="yes">
                        Yes
                    </option> -->
                    <!-- preset the values -->
                    <option value=<?php echo $product_data_edit['status']?>>
                        
                    </option>
               </select>

                <label>COLOUR</label>
               <select name="colour">
                    <!-- <option value="red">
                        Red
                    </option> -->
                    <option value=<?php echo $product_data_edit['color'] ?>>
                       
                    </option>
               </select>

               <label>MATERIAL</label>
               <select name="material">
                    <!-- <option value="glass">
                        Glass
                    </option>
                    <option value="metal">
                        Metal 
                    </option> -->
                    <option value=<?php echo $product_data_edit['material'] ?>>
                      
                    </option>
               </select>
            </div>
                
            </form>
        </div>
</form>
    </div>
</body>
</html>