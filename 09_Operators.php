<?php
 /*operators in php 
 1. Arithmetic operators{+, -, *, /, %, **(exponential)}
 2. Assignment operators{=, +=, -=, /=, /=}
 3. Comperision operators{>, <, ==, <>(not equal to), >=, <=}
 4. Logical operators(and/&&, or/||)
 */

//  1. Arithmetic operators

$a=55;
$b=5;
echo "For a+b is equal to ".($a+$b)."<br>";//we have to use first bracket() to make integer value into string

// 3. Comperision operators
$x=5;
$y=6;
$z=5;

echo "For x==z, the result is ";
var_dump($x==$z);

echo "<br>";

echo "For x==y, the result is ";
var_dump($x==$y);

// 4. Logical operators(and, or)
$p= true;
$q=false;

echo"<br>";
echo "for p and q is equal to ";
var_dump($p and $q);

echo"<br>";
echo "for p or q is equal to ";
var_dump($p or $q);
?>