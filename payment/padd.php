<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../add.css"> 
    <title>Payment info</title>
</head>
<body>
<form class="formclass" action="pinsert.php" method="post">
<div class="main">
        <!-- header -->
        <div class="heading" >
            <h2>Add Payment info</h2>
            <a href="../payment/payment.php">CANCEL</a>
            <button>SAVE</button>
        </div>
            <!-- main content form -->
        <div class="content">
            <!-- form -->
                <h2>PAYMENT INFORMATION</h2>

            <div class="extra">
                <label>PAYMENT METHOD ID</label>
                <input type="text" name="payment_method_id" value="" placeholder="id" />                
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

</body>
</html>