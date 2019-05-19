<?php

if(isset($_POST['submit_user'])){
    $user = htmlspecialchars($_POST['user']);
    if(empty($user)){
        header("location: ../index.php?error=emptyfield" );
        exit();
    }else{
        session_start();
        $_SESSION["user"] = $_POST["user"];
        header('location: ../chat.php');
        exit();
    }
}
else{
    header("location: index.php" );
    exit();
}