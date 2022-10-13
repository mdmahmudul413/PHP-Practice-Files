<?php
$a = 10;
$b = 20;

function process(){
    // global variables initialization in a scope. if we change the value in the local scope then the value will change globally
    global $a, $b;//access the global variables from local scope
     $a = 100;
     $b = 200;
    // $a = 70;
    // $b = 50;
    echo "The value of a and b are ".$a." & ".$b;
}
echo "The value of a and b are ".$a." & ".$b;
echo "<br>";

echo process();
echo "<br>";
echo "<br>";

// To prints the total global variables
echo var_dump($GLOBALS);
?>