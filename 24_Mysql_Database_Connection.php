<?php
/* Ways to connect to Mysql Database
1. Mysqli extension- Procedural, Object oriented
2. PDO(PHP Data Object)
*/

// connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

// create a connection
$conn = mysqli_connect($servername, $username, $password);

// die if failed to connect the database

if(!$conn){
    die("Sorry, We are failed to connect the database. ". mysqli_connect_error() );
}else {
    echo "Successfully Connected to the Database";
}

?>