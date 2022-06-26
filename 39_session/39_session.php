<?php
// session is used to managed information across difference pages

// varify user login info
session_start();

$_SESSION['username'] = 'harry';
$_SESSION['favcat'] = 'books';
echo "we have saved your sassion";
?>