<?php
session_start();
if(isset($_SESSION['username'])){
    echo "wellcome ".$_SESSION['username'].". Your favourite catagory is ".$_SESSION['favcat'];
}
else{
    echo "Login to continue.";
}



?>