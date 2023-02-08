<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../add.css"> 
    <title>Edit data</title>
</head>
<body>
<div class="main">
        <!-- header -->
        <div class="heading" >
            <h2>edit info. of salesman</h2>
            <a href="../salesman/salesman.php">CANCEL</a>
            <button>SAVE</button>
        </div>
           <!-- main content form -->
        <div class="content">
            <!-- form -->
            <form class="formclass">
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
                <label>PHONE</label>
                <input type="number" name="phone"  placeholder="enter phone number" />
                <label>COMPANY</label>
                <input type="text" name="company"  placeholder="enter company name" />
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

                <label>GENDER</label>
               <select name="gender">
                    <option value="red">
                        MALE
                    </option>
                    <option value="blue">
                        FEMALE 
                    </option>
               </select>

               
            </div>
                
            </form>
        </div>
    </div>
</body>
</html>