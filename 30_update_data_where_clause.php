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

//selecting query/fetching data using WHERE clause
$sql = "SELECT * FROM `contact` WHERE `email` = '13@gmail.com'";
$result = mysqli_query($conn, $sql);

// mysqli_num_rows() return the number of rows/records
$num = mysqli_num_rows($result);
echo "<br>";
echo "The number of records is ".$num;

//mysqli_fetch_assoc() display the rows from database one by one

if($num > 0){

    echo "<br>";
    
    // fetching data
    $no=1;
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $no. ". Hello, ". $row['name']. ". Your email is ". $row['email'];
        $no++;
        echo "<br>";
    }
}

//updating query using WHERE clause - update single record
$sql = "UPDATE `contact` SET `name` = 'Mahmudun' WHERE `contact`.`name` = 'Moon';";
$result = mysqli_query($conn, $sql);
echo $result."<br>";//returns a boolean true

if($result){
    echo "We updated the record successfully";
}
else {
    echo "We could not update the record successfully";
}


//updating query using WHERE clause-update multiple record
// in this we have to care about our query because it can affects multiple records at a time
echo "<br>";
$sql = "UPDATE `contact` SET `name` = 'Mahmudun' WHERE `contact`.`concern` = 'ssds';";
$result = mysqli_query($conn, $sql);

if($result){
    echo "We updated multiple records successfully";
}
else {
    echo "We could not update multiple records successfully";
}

// The number of affected rows
echo "<br>";
$aff = mysqli_affected_rows($conn);
echo "Number of affected rows ".$aff;
?>