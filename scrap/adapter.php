<?php
class adapter{
    public $username = "localhost";
    public $password = "none";
    public $servername = "none";
    public $dbname = "none";

    public function connect() {
        $conn = mysqli_connect($this->username,$this->password,$this->servername,$this->dbname);
        return $conn;
    }
}

// call function and print
// how to access function > through object
$adapter = new adapter();
print_r($adapter->connect());

?>

<?php

//make methods for all files like for insert make only once

?>