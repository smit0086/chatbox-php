<?php
session_start();
require('db.inc.php');
if(isset($_POST['submit_message'])){
    $message = htmlspecialchars($_POST["message"]);
    if(empty($message)){
        header('location: ../chat.php?error=emptyfield');
        exit();
    }else{
        $username = $_SESSION["user"];
        $message = $_POST["message"];
        $query = "INSERT INTO chats (user,message) VALUES ('$username','$message');";
        $result = mysqli_query($conn,$query);
        header('location: ../chat.php');
        exit();
    }
}else{
    header('location: ../index.php');
    exit();
}