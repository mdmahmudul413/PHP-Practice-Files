<?php
// Associative array
// In associative array all of the values has an individual key
$arr = array(
    "a" => "red",
    "b" => "blue",
    "c" => "green",
    8 => "brown"
);

echo $arr["a"]."<br>";
echo $arr["b"]."<br>";
echo $arr["c"]."<br>";
echo $arr[8]."<br>";
echo var_dump($arr);

echo "<br>";

foreach ($arr as $key => $value) {
    echo "<br>"."The favourite color of $key is $value." ;
}
echo "<br>";
foreach($arr as $key => $value){
    echo "<br>" . 'The name of the key is' . " " . $key;
    echo "<br>" . 'The value of the key '. '"' . $key . '"' . " is " . $value;
    
}
?>