<?php
echo "<pre>";

// require
require_once '../adapter/adapter.php';
$adaptervar = new adapter();

// get id
$link = $_GET['id'];

// query
$idquery = "SELECT `category_id` FROM `category` WHERE `category_id`=$link";

// fetchNumber call function
$idresult = $adaptervar->fetchNumber($idquery);


if ($idresult['category_id'] === $link ) {
    $query = "SELECT * FROM `category` WHERE `category_id`= $link ";
    $adaptervar = new adapter();
    $category = $adaptervar->fetchRow($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../add.css"> 
    <title>Edit category</title>
</head>
<body>
<form action="cupdate.php?id=<?php echo $category['category_id'] ?>" method="post">
<div class="main">
        <!-- header -->
        <div class="heading" >
            <h2>Edit Category</h2>
            <a href="../category/category.php">CANCEL</a>
            <button type="submit">SAVE</button>
        </div>
            <!-- main content form -->
        <div class="content">
            <!-- form -->
            <form class="formclass">
                <h2>CATEGORY INFORMATION</h2>

            <div class="extra">
                <label>CATEGORY ID</label>
                <input type="number" name="category_id" value="" placeholder="id" />                
                <label>CATEGORY NAME</label>
                <input type="name" name="name" value="" placeholder="name" />
            </div>

            
                
            <div class="extra">
                <label>STATUS</label>
               <select name="status">
                    <option value="active">
                        active
                    </option>
                    <option value="inactive">
                        inactive 
                    </option>
               </select>

               <div class="extra">
                    <label>DESCRIPTION</label>
                    <textarea name="description" cols="22" rows="4"></textarea>
                </div>               
               
            </div>
                
            </form>
        </div>
    </div>
</form>

<?php
}
?>
</body>
</html>