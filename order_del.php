<?php
ob_start();
session_start();
include_once ("connectDB.php");


if(!isset($_SESSION["intLine"])){
    $_SESSION["intLine"] = 0;
    $_SESSION["strProductID"][0] = $_GET["id"];
    $_SESSION["strQty"][0] = 1;
    $_SESSION["cart"][0] = 1;
    header("location:cart2.php");

}
else
{
    $key = array_search($_GET["id"], $_SESSION["strProductID"]);
    if((string)$key !=""){
        $_SESSION["strQty"][$key] = $_SESSION["strQty"][$key] -1;
        $_SESSION["cart"][$key] = $_SESSION["cart"][$key] -1;
    }
    else
    {
        $_SESSION["intLine"] = $_SESSION["intLine"] -1;
        $intNewLine = $_SESSION["intLine"];
        $_SESSION["strProductID"][$intNewLine] = 1;   
    }
    header("location:cart2.php");
}

?>