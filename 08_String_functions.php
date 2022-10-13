<?php
$name= "Muhammad Mahmudul Islam";
echo $name;

echo "<br>";

// string length
echo strlen($name);

echo "<br>";

// string concatenation
echo "The length of the string is " . strlen($name);

echo "<br>";

// string word counter
echo "Total word of this string is " . str_word_count($name);

echo "<br>";

// string reverce
echo "Reverse of the string is ". strrev($name);

echo "<br>";

// to find the index number of a specific word
echo 'The word "islam" start from index number '. strpos($name, "Mahmudul");

echo "<br>";

// to replace a word in the string
echo str_replace("Muhammad", "Md", $name);

echo "<br>";
echo "<br>";

// to repeat a string multiple time
echo str_repeat($name, 4);


echo "<br>";

// string triming 
echo "<pre>"; 
$name0= "   This is a string   ";

echo $name0;
echo "<br>";

// rtrim - right trim
echo rtrim($name0);

echo "<br>";
// ltrim - left trim
echo ltrim($name0);
echo "</pre>";

?>