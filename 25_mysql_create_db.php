<?php
// connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

// create a connection
$conn = mysqli_connect($servername, $username, $password);

// die if failed to connect the database
if(!$conn){
    die("Sorry, We are failed to connect the database. ". mysqli_connect_error()."<br>" );
}else {
    echo "Successfully Connected to the Database"."<br>";
}

// create a database
$sql = "CREATE DATABASE moon_db";
$result = mysqli_query($conn, $sql);

// Check for the db creation success
if($result){
    echo "DB was successfully created.";
}
else{
    echo "DB was not successfully created.The error is --> " . mysqli_error($conn); 
}


?>