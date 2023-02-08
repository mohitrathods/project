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
<div class="main">
        <!-- header -->
        <div class="heading" >
            <h2>Edit Category</h2>
            <a href="../category/category.php">CANCEL</a>
            <button>SAVE</button>
        </div>
            <!-- main content form -->
        <div class="content">
            <!-- form -->
            <form class="formclass">
                <h2>CATEGORY INFORMATION</h2>

            <div class="extra">
                <label>CATEGORY ID</label>
                <input type="number" name="category_id" value="" placeholder="product name" />                
                <label>CATEGORY NAME</label>
                <input type="name" name="Price" value="" placeholder="price" />
            </div>

            <div class="extra">
                
                <label>DESCRIPTION</label>
                <textarea name="description" cols="22" rows="4"></textarea>
            </div>
                
            <div class="extra">
                <label>STATUS</label>
               <select name="status">
                    <option value="yes">
                        Yes
                    </option>
                    <option value="no">
                        No 
                    </option>
               </select>

               
               </select>
            </div>
                
            </form>
        </div>
    </div>
</body>
</html>