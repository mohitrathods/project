<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../add.css"> 
    <title>Add data</title>
</head>
<body>

<form action="sinsert.php" method="post">
<div class="main">
        <!-- header -->
        <div class="heading" >
            <h2>Add info. of salesman</h2>
            <a href="../salesman/salesman.php">CANCEL</a>
            <button>SAVE</button>
        </div>
           <!-- main content form -->
        <div class="content">
            <!-- form -->
                <h2>ADD DATA</h2>

            <div class="extra">
                <label>SALESMAN ID</label>
                <input type="number" name="salesman_id" value="" placeholder="customer id" />                
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
</body>
</html>