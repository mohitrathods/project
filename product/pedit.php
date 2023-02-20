<?php 


echo '<pre>';

//get access to file
require_once '../adapter/adapter.php';

$adaptervar = new adapter();

//get product id which product to edit 
$link = $_GET['id']; //get the id and store in link

//get the selected product id and check if it is id that i get from GET method
$getidquery = "SELECT `product_id` FROM `product` WHERE `product_id`=$link";

//store id in idresult variable
$idresult = $adaptervar->fetchNumber($getidquery);

if ($idresult['product_id'] === $link ) {
    $query = "SELECT * FROM `product` WHERE `product_id`= $link ";
    $adaptervar = new adapter();
    $product = $adaptervar->fetchRow($query);

?>

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
<form class="formclass" action="pupdate.php?id=<?php echo $product['product_id'] ?>" method="post">

<div class="main">

        <!-- header -->
        <div class="heading" >
            <h2>Edit Product</h2>
            <a href="../product/product.php">CANCEL</a>
            <button type="submit">SAVE</button>
        </div>
        <div class="content">
                <h2>PRODUCT INFORMATION</h2>

                <?php
                //DATA TO BE EDITED
                //collect the id
                //validate the id
                // print_r($_POST);

                // $product_data_edit =['product_id'=> 5, 'sku'=>'345k', 'cost'=>400,'price' => 800,'quantity'=>50,'description'=>'edited des.', 'color'=>'green','status'=> 'yes','material'=>'semiconducter' ];

                ?>

            <div class="extra">
                <label>NAME</label>
                <!-- <input type="text" name="name" value="" placeholder="product name" />    -->
                <!-- set the values into input -->
                <!-- this will set values in inputbox -->
                <input type="text" name="name" value="" placeholder="name"></input>

                <label>SKU</label>
                <input type="text" name="sku" value="" placeholder="sku" />

                <label>COST</label>
                <input type="text" name="cost" value="" placeholder="cost" />

                
            </div>

            <div class="extra">
                <label>PRICE</label>
                <input type="text" name="price" value="" placeholder="price" />
                <label>QUANTITY</label>
                <input type="text" name="quantity" value=""  placeholder="enter quantity" />
                <label>DESCRIPTION</label>
                <input type="text" name="description"  value="" ></input>
            </div>
                
            <div class="extra">

            <label>COLOUR</label>
               <select name="color">
                    <option value="red">
                        Red
                    </option>
                    <option value="blue">
                        Blue
                    </option>
                       
                    </option>
               </select>

                <label>STATUS</label>
               <select name="status">
                    <option value="active">
                        Active
                    </option>
                    <!-- preset the values -->
                    <option value="inactive">
                        Inactive
                    </option>
               </select>

                

               <label>MATERIAL</label>
               <select name="material">
                    <option value="glass">
                        Glass
                    </option>
                    <option value="metal">
                        Metal 
                    </option>
                      
                    </option>
               </select>
            </div>
                
        </div>
    </div>
    </form>

<?php
}
?>
</body>
</html>