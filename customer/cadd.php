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
<div class="main">
<form class="formclass" action="insert.php" method="post">

        <!-- header -->
        <div class="heading" >
            <h2>Add Customer</h2>
            <a href="../customer/customer.php">CANCEL</a>
            <button type="submit">SAVE</button>
        </div>
            <!-- main content form -->
        <div class="content">
            <!-- form -->
            <!-- <form class="formclass" action="insert.php" method="post"> -->
                <h2>ADD DATA</h2>

            <div class="extra">
                <label>CUSTOMER ID</label>
                <input type="number" name="customer_id" value="<?php echo "" ?>" placeholder="customer id" />                
                <label>FIRST NAME</label>
                <input type="text" name="first_name"  placeholder="first name" />
                <label>LAST NAME</label>
                <input type="text" name="last_name"  placeholder="last name" />
            </div>

            <div class="extra">
                <label>EMAIL</label>
                <input type="email" name="email"  placeholder="enter email" />
            
                
                <label>GENDER</label>
               <select name="gender">
                    <option value="male">
                        MALE
                    </option>
                    <option value="female">
                        FEMALE 
                    </option>
               </select>
                
            </div>
                
            <div class="extra">

            <label>PHONE</label>
                <input type="number" name="mobile"  placeholder="enter phone number" />

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
                
            <!-- </form> -->
        </div>
</form>
    </div>
</body>
</html>