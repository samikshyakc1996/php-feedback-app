<?php

// define constants

define('DB_HOST', 'localhost');
define('DB_USER', 'sam');
define('DB_PASS', '123456');
define('DB_NAME', 'feedback'); 

// create connection

$conn=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check connection
if($conn->connect_error){
    die('Connection failed:' . $conn->connect_error);
}
// echo "connection established";
?>