<?php
// connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";

// create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// die if failed to connect the database
if(!$conn){
    die("Sorry, We are failed to connect the database. ". mysqli_connect_error()."<br>" );
}else {
    echo "Successfully Connected to the Database"."<br>";
}
$name = "Muhammad";
$email = 'a@gmail.com';
$concern = "Hello";

// query for inserting data to the database 
$sql = "INSERT INTO `contact` (`name`, `email`, `concern`) VALUES ('$name', '$email', '$concern');";

$result = mysqli_query($conn, $sql);

// Check for the data insertion success
if($result){
    echo "Data was successfully inserted.";
}
else{
    echo "Data was not successfully inserted. The error is --> " . mysqli_error($conn); 
}

?>