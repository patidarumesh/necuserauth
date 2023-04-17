<?php

//set connection variables
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "nec_web";

//create a connection
$conn = mysqli_connect($server_name, $user_name, $password, $db_name);
// echo "Connection established";

// check for connection success
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    
}
?>