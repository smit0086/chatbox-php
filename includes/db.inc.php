<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "chatbox";
$conn = mysqli_connect($server,$user,$pass,$database);

if(!$conn){
    die("Database error: ".mysqli_connect_error($conn));
}

?>