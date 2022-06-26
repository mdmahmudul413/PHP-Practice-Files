<?php
    include '_dbconnect.php';
    require '_dbconnect.php';

    // difference between include and requre is include through a warning while we made a mistake in the syntex but requre through a fatal error

    // include '_dbconnect1.php';
    // require '_dbconnect1.php';
    echo "<h1>this</h1>";

    // data fetching/ selecting query
    $sql = "SELECT * FROM `contact`";
    $result = mysqli_query($conn, $sql);

    // Check for the data fetching success
    if($result){
        echo "Data was fetching successfully.";
    }
    else{
        echo "Data was not fetching successfully. The error is --> " . mysqli_error($conn); 
    }
    echo "<br>";
    $num = 1;

    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $num. ". Hello, ". $row['name']. ". Your email is ". $row['email'].".". "You give us your concern and that is "."'".$row['concern']."'";
        $num++;
        echo "<br>";
    }

    $num1 = mysqli_num_rows($result);
    echo "<br>";
    echo "Total record is: ".$num1;
?>