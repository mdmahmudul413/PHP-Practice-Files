<?php
// connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "moon_db";

// create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// die if failed to connect the database
if(!$conn){
    die("Sorry, We are failed to connect the database. ". mysqli_connect_error()."<br>" );
}else {
    echo "Successfully Connected to the Database"."<br>";
}

// create a table in the database
$sql = "CREATE TABLE `employe_name` ( `sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(15) NOT NULL , `age` INT NOT NULL , `role` VARCHAR(10) NOT NULL , PRIMARY KEY (`sno`));";

$result = mysqli_query($conn, $sql);

// Check for the table creation success
if($result){
    echo "Table was successfully created.";
}
else{
    echo "DB was not successfully created.The error is --> " . mysqli_error($conn); 
}

?>