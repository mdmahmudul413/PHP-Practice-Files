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

//deleting query- single record
$sql = "DELETE FROM `contact` WHERE `name` = 'cc'";
$result = mysqli_query($conn, $sql);

if($result){
    echo "We deleted the record successfully.";
}
else {
    echo "We could not delete the record successfully. <br>";
    echo "Problem found: ". mysqli_error($conn);
}
// The number of affected rows
echo "<br>";
$aff = mysqli_affected_rows($conn);
echo "Number of affected rows ".$aff;



//deleting query- multiple records
echo "<br>";
$sql = "DELETE FROM `contact` WHERE `email` = '13@gmail.com'";
$result = mysqli_query($conn, $sql);

if($result){
    echo "We deleted the records successfully.";
}
else {
    echo "We could not delete the records successfully.<br>";
    echo "Problem found: ". mysqli_error($conn);
}
// The number of affected rows
echo "<br>";
$aff = mysqli_affected_rows($conn);
echo "Number of affected rows ".$aff;

//deleting query using LIMIT clause
/*echo "<br>";
$sql = "DELETE FROM `contact` WHERE `email` = 'a@gmail.com' LIMIT 15";
$result = mysqli_query($conn, $sql);

if($result){
    echo "We deleted the record successfully.";
}
else {
    echo "We could not delete the record successfully. <br>";
    echo "Problem found: ". mysqli_error($conn);
}
// The number of affected rows
echo "<br>";
$aff = mysqli_affected_rows($conn);
echo "Number of affected rows ".$aff;*/
?>