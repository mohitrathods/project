<?php
require_once '../adapter/adapter.php';
$adaptervar = new adapter();

$link = $_GET['id'];

// match id query
$matchid = "SELECT `shipping_method_id` FROM `shipping` WHERE `shipping_method_id` = $link";
$resultid = $adaptervar->fetchNumber($matchid);

if ($resultid['shipping_method_id'] === $link) {

    //fetch row to be edited : query
    $adaptervar = new adapter();
    $query = "SELECT * FROM `shipping` WHERE `shipping_method_id` = $link";
    $result = $adaptervar->fetchRow($query);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../add.css"> 
    <title> edit shipping info</title>
</head>
<body>

<form class="formclass" action="supdate.php?id=<?php echo $resultid['shipping_method_id'] ?>" method="post">
<div class="main">
        <!-- header -->
        <div class="heading" >
            <h2>edit Shipping info</h2>
            <a href="../shipping/shipping.php">CANCEL</a>
            <button>SAVE</button>
        </div>
            <!-- main content form -->
        <div class="content">
            <!-- form -->
                <h2>SHIPPING INFORMATION</h2>

            <div class="extra">
                <label>SHIPPING METHOD ID</label>
                <input type="text" name="shipping_method_id" value="" placeholder="id" />                
                <label>NAME</label>
                <input type="text" name="name" value="" placeholder="name" />
            </div>

            <div class="extra">
                <label>AMOUNT</label>
                <input type="number" name="amount" value="" placeholder="enter amount" />
                <label>STATUS</label>
               <select name="status">
                    <option value="active">
                        Yes
                    </option>
                    <option value="inactive">
                        No 
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