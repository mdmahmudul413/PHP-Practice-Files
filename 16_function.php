<?php

// function for calculating total marks
function processMarks($arr){
    $sum=0;
    foreach ($arr as $i) {
        $sum+=$i;
    }
    return $sum;
}

// function for calculating avg marks
function avgMarks($arr){
    $sum=0;
    $i=0;
    foreach ($arr as $a) {
        $sum+=$a;
        $i++;
    }
    return $sum/$i;
}

$s=[85, 87, 92, 81, 33, 32, 77, 99];
$sTotalMarks= processMarks($s);
$sAvgMarks= avgMarks($s);

echo "Total marks out of 800 is ". $sTotalMarks;

echo "<br>";

echo "Average marks out of 100 is ". $sAvgMarks;

?>