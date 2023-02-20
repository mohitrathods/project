<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../add.css"> 
    <title>Add Product</title>
</head>
<body>
<form class="formclass" action="pinsert.php" method="post">
    <!-- PERFORM OPERATIONS AVAILABLE IN THE FILE pinsert.php  -->
<div class="main">
    


        <!-- header -->
        <div class="heading" >
            <h2>Add Product</h2>
            <a href="../product/product.php">CANCEL</a>
            <button type="submit">SAVE</button>
            <!-- <input type="submit" /> -->
        </div>
            <!-- main content form -->
        <div class="content">
           
                <h2>PRODUCT INFORMATION</h2>

            <div class="extra">
                <label>NAME</label>
                <input type="text" name="name" value="" placeholder="product name" />                
                <label>SKU</label>
                <input type="number" name="sku" value="" placeholder="product sku" /> 
                <label>COST</label>
                <input type="number" name="cost" value="" placeholder="cost" />
            </div>

            <div class="extra">
                <label>PRICE</label>
                <input type="text" name="price" value="" placeholder="price" />
               
                
            </div>

            <div class="extra">
              
                <label>QUANTITY</label>
                <input type="text" name="quantity" value="" placeholder="enter quantity" />
                <label>DESCRIPTION</label>
                <textarea name="description" cols="22" rows="4"></textarea>
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
               </select>

               <label>STATUS</label>
               <select name="status">
                    <option value="yes">
                        Yes
                    </option>
                    <option value="no">
                        No 
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
                    <option value="plastic">
                        Plastic 
                    </option>
               </select>
            </div>
                
        </div>

    </div>
</form>
</body>
</html>