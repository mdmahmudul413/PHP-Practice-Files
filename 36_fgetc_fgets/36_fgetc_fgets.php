<?php
    // fopen returns resources if resource is available otherwise returns false
    $fptr = fopen('myfile.txt','r');
    // fgets() reads line by line from a file

    // echo fgets($fptr);
    // echo fgets($fptr);

    // while($a = fgets($fptr)){
    //     echo $a;
    // }


    // fgetc() reads char by char from a file

    // echo fgetc($fptr);
    // echo fgetc($fptr);

    // while($a = fgetc($fptr)){
    //     echo $a;
    // }


    // a program to read a file untill fullstop
    while($a = fgetc($fptr)){
        echo $a;

        if($a == '.'){
            break;
        }
    }
    fclose($fptr);
    

?>