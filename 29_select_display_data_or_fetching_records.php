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

// data fetching/ selecting query
$sql = "SELECT * FROM `contact`";
$result = mysqli_query($conn, $sql);

// Check for the data fetching success
// if($result){
//     echo "Data was fetching successfully.";
// }
// else{
//     echo "Data was not fetching successfully. The error is --> " . mysqli_error($conn); 
// }



// mysqli_num_rows() return the number of rows/records
$num = mysqli_num_rows($result);
echo "<br>";
echo $num;

//mysqli_fetch_assoc() display the rows from database one by one

if($num > 0){
    // fetching in a inconvenient way 
    /*echo "<br>";
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";*/

    // fetching in a convenient way using while loop
    echo "<br>";
    // while($row = mysqli_fetch_assoc($result)){
    //     echo var_dump($row);
    //     echo "<br>";
    // }

    // fetching in another convenient way using while loop
    // $i = 0;
    // while($i < $num){
    //     $row = mysqli_fetch_assoc($result);
    //     echo var_dump($row);
    //     echo "<br>";
    //     $i++;
    // }

    // fetching individual data
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['sno']. ". Hello, ". $row['name']. ". Your email is ". $row['email'];
        echo "<br>";
    }
}
?>