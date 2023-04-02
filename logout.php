<?php
include_once ("connectDB.php");
$conn = new DB_conn;

session_start();
function logout(){
    session_destroy();
}

logout();
session_start();
  $_SESSION['logout'] = "good";
  header("location:index.php");




?>