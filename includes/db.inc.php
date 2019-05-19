<?php

$server = "eu-cdbr-west-02.cleardb.net";
$user = "b54aaecce86120";
$pass = "3cc79960";
$database = "heroku_046e32e37f7ded0";
$conn = mysqli_connect($server,$user,$pass,$database);

if(!$conn){
    die("Database error: ".mysqli_connect_error($conn));
}

?>