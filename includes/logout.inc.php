<?php
session_start();
if($_SESSION["user"]){
    session_unset();
    session_destroy();
    header("location: ../index.php");
    exit();
}else{
    header("location: ../index.php");
    exit();
}