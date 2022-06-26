<?php
    // fopen returns resources if resource is available otherwise returns false
    $fptr = fopen('myfile.txt','r');
    if(!$fptr){
        echo '<br>';
        die("Unable to open file. Please check the file name.");
    }
    // fread returns the file
    // filesize() take the length of file 
    $content = fread($fptr, filesize('myfile.txt'));
    echo $content;
    // fclose() is used to close the file that the usage of ram or memory will free up
    fclose($fptr);

?>