<?php
echo "<pre>";

require_once '../adapter/adapter.php';
$adaptervar = new adapter();


$link = $_GET['id'];

$checkid = "SELECT `vendor_id` FROM `vendor` WHERE `vendor_id` = $link";

$idresult = $adaptervar->fetchNumber($checkid);

if ($idresult['vendor_id'] === $link) {
    //fetch the row to be edited
    $adaptervar = new adapter();
    $query = "SELECT * FROM `vendor` WHERE `vendor_id` = $link";
    $rowresult = $adaptervar->fetchRow($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../add.css"> 
    <title>Edit vendor</title>
</head>
<body>
<form class="formclass" action="vupdate.php?id=<?php echo $idresult['vendor_id'] ?>" method="post">
<div class="main">
        <!-- header -->
        <div class="heading" >
            <h2>Edit info. of vendor</h2>
            <a href="../vendor/vendor.php">CANCEL</a>
            <button type="submit">SAVE</button>
        </div>
        <div class="content">
            <!-- form -->
                <h2>ADD DATA</h2>

            <div class="extra">
                <label>VENDOR ID</label>
                <input type="number" name="vendor_id" value="" placeholder="customer id" />                
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

                <label>PHONE</label>
                <input type="number" name="mobile"  placeholder="enter phone number" />
                
            </div>
                
            <div class="extra">
                <label>STATUS</label>
               <select name="status">
                    <option value="active">
                        Yes
                    </option>
                    <option value="inactive">
                        No 
                    </option>
               </select>
               <label>COMPANY</label>
                <input type="text" name="company"  placeholder="enter company name" />
            </div>
        </div>
    </div>
</form>
<?php
}
?>

</body>
</html>