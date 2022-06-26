<?php
    // note: if we open a file in w mode than if  the added file is exist than it will empty the file otherwise it will create the file.

    // fopen returns resources if resource is available otherwise returns false

    // 1. writing a file
    // $fptr = fopen('myfile.txt','w');
    // fwrite($fptr, "This is the best file in this planet.");
    // fwrite($fptr, "e in this planet.\n");
    // fwrite($fptr, "Alloh hu Akbar.\n");
    // fclose($fptr);

    // 2. appending a file
    $fptr = fopen('myfile.txt','a');
    fwrite($fptr, "Alhamdulillah, alloh give me everything\n");
    fclose($fptr);


     
?>