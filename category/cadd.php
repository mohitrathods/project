<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../add.css"> 
    <title>Add Category</title>
</head>
<body>
<!-- form will perform action type submit in button || in action whrite the file from which queries to be performed -->
<form action="cinsert.php" method="post">
<div class="main">
        <!-- header -->
        <div class="heading" >
            <h2>Add Category</h2>
            <a href="../category/category.php">CANCEL</a>
            <button type="submit"> SAVE</button>
        </div>
            <!-- main content form -->
        <div class="content">
            <!-- form -->
            <form class="formclass">
                <h2>CATEGORY INFORMATION</h2>

            <div class="extra">
                <label>CATEGORY ID</label>
                <input type="number" name="category_id" value="" placeholder="id of category" />                
                <label>CATEGORY NAME</label>
                <input type="name" name="name" value="" placeholder="write name" />
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
</body>
</html>