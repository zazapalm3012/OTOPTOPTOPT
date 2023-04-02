<?php
include_once ("connectDB.php");
$conn = new DB_conn;

$product_id = $_GET["product_id"];
$sql = $conn->select_product_by_id($product_id);

$product = mysqli_fetch_object($sql);
echo json_encode($product); 
?>