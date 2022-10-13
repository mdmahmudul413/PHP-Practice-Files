<?php
// numeric array/index array 
$arr= array("banana", "mango", "apple");
// alternative way to declear an array
$arr1 = [1, 2, 3, 4];

foreach ($arr as $a) {
    echo "I like";
    echo $a;
    echo "<br>";
}

echo var_dump($arr1);

// for ($i=0; $i < count($arr) ; $i++) { 
//     echo "I like ";
//     echo $arr[$i];
//     echo "<br>";
// }
?>