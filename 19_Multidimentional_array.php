<?php
// Multidimentional Array

$arr = array(
    array(1, 2, 3, 4),
    array(5, 6, 7, 8),
    array(9, 0, 1)
);

// echo var_dump($arr);

for ($i=0; $i < count($arr) ; $i++) { 
    echo var_dump($arr[$i]);
    echo "<br>";
}

echo "<br>";

for ($i=0; $i < count($arr) ; $i++) { 
    for ($j=0; $j < count($arr[$i]); $j++) { 
       echo $arr[$i][$j]." ";
    }
    echo "<br>";

}
?>