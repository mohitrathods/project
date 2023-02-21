<?php
// print_r($_GET);

// $customer = ['customer_id' => 1, 'name' => 'mohit rathod'];
?>

<?php 
echo "<pre>";

//require file adn access class
require_once '../adapter/adapter.php';
$adaptervar = new adapter();

//get id
$link = $_GET['id'];

//id query
$compareid = "SELECT `customer_id` FROM  `customer` WHERE `customer_id` = $link";

//result save it
$resultid = $adaptervar->fetchNumber($compareid);
?>


<?php
if ($resultid['customer_id'] === $link) {   
    //THIIS QUERY --> to fetch the particular row to be edited
    $query = "SELECT * FROM `customer` WHERE `customer_id` = $link";
    $adaptervar = new adapter();
    $result = $adaptervar->fetchRow($query);
?>
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../add.css" />
            <title>edit customer</title>
        </head>
<body>
<form action="update.php?id=<?php echo $result['customer_id'] ?>"  method="post">
        <div class="main">

        <!-- header -->

                <div class="heading" >
                    <h2>Edit Product</h2>
                    <a href="../customer/customer.php">CANCEL</a>
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
                        <label>Customer id</label>
                        <!-- <input type="text" name="name" value="" placeholder="product name" />    -->
                        <!-- set the values into input -->
                        <!-- this will set values in inputbox -->
                        <input type="text" name="customer_id" value=<?php echo $result['customer_id'] ?> />

                        <label>First Name</label>
                        <input type="text" name="first_name" value=<?php echo $result['first_name'] ?> />

                        <label>Last Name</label>
                        <input type="text" name="last_name" value=<?php echo $result['last_name'] ?> />

                        
                    </div>

                    <div class="extra">
                        <label>EMAIL</label>
                        <input type="text" name="email" value=<?php echo $result['email'] ?> />
                        
                        
                    <label>GENDER</label>
                    <select name="gender">
                            <option value="male">
                                Male
                            </option>
                            <!-- preset the values -->
                            <option value="female">
                                Female
                            </option>
                    </select>
                    
                        
                    </div>
                        
                    <div class="extra">

                    <label>MOBILE</label>
                        <input type="text" name="mobile" value=<?php echo $result['mobile'] ?> />


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

                        

                    </div>
                        
                </div>
                </div>

        </form>
        <?php
        }

        else {
            echo "error";
        }

?>
</body>
</html>