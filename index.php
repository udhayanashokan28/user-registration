<?php
session_start();

// on login screen, redirect to dashboard if already logged in
if(isset($_SESSION['username'])){
    header('location:home.php');
}
//Probably caused by back button... Check if logged-in...
if(!$_SESSION["username"])
{
    //Do not show protected data, redirect to login...
    header('Location: login.php');
}

require_once __DIR__ . "/login.php";
